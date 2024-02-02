<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	protected function index() {
		if (auth()->check())
			return redirect()->route('dashboard');
		return redirect()->route('login', [], 301);
	}

    protected function dashboard() {
        return view('pages.dashboard');
    }

    public function cancelled() {
        return view('pages.cancelled');
    }

    public function pending() {
        return view('pages.pending');
    }

    public function defective() {
        return view('pages.defective');
    }

    public function receipt() {
        return view('pages.receipt');
    }

    public function invoice() {
        return view('action.invoice');
    }
}