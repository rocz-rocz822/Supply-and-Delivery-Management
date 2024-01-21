<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function supplies() {
        return view('admin.pages.supplies');
    }
    
    public function returned() {
        return view('admin.pages.returned');
    }

    public function defectives() {
        return view('admin.pages.defectives');
    }

    public function transaction() {
        return view('admin.pages.transaction');
    }
}
