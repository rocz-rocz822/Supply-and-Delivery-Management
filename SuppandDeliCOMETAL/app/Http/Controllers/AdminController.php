<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('pages.dashboard');
    }

    public function supply() {
        return view('pages.supply');
    }

    public function create() {
        return view('action.create');
    }

    public function delivered() {
        return view('pages.delivered');
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
