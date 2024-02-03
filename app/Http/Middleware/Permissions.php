<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Carbon\Carbon;

use Laravel\Sanctum\PersonalAccessToken;

use Closure;

class Permissions
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
	 */
	public function handle(Request $req, Closure $next, ...$permissions): Response
	{
		if (!auth()->check()) {
			return redirect()->intended();
		}

		$user = auth()->user();
		$sanctum = false;

		if (in_array('sanctum', $permissions)) {
			if ($user->tokens()->count() >= 0) {
				$token = PersonalAccessToken::findToken(session()->get('bearer'));

				$expiration = config('sanctum.expiration');

				if (Carbon::parse($token->created_at)->lte(now()->subMinutes($expiration)))
					return $this->logSanctumActivity($user);
				else {
					$sanctum = true;
				}
			}
		}

		if (!$sanctum) {
			return redirect()
				->route('e-commerce.supply.index')
				->with('flash_info', 'Access Denied')
				->with('has_icon', 'true')
				->with('message', 'Redirected back to previous page.')
				->with('has_timer', true)
				->with('duration', '5000');
		}

		return $next($req);
	}
}
