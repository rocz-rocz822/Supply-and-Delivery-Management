<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Laravel\Sanctum\Sanctum;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;

use Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
		if (auth()->check())
			return redirect()->route('e-commerce.supply.index');
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

		$token = auth()->user()->createToken('authenticated');
		if ($expiration = config('sanctum.expiration')) {
			$model = Sanctum::$personalAccessTokenModel;
			$model::where('created_at', '<', now()->subMinutes($expiration))->delete();
		}

		session(["bearer" => $token->plainTextToken]);

        return redirect()->intended('/e-commerce/supply');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(RouteServiceProvider::HOME);
    }
}
