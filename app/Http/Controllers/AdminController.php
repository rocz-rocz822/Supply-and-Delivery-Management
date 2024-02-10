<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	protected function index() {
		if (auth()->check())
			return redirect()->route('e-commerce.supply.index');
		return redirect()->route('login', [], 301);
	}

    // protected function dashboard() {
    //     return view('pages.dashboard');
    // }

    public function invoice() {
        return view('action.invoice');
    }
}
