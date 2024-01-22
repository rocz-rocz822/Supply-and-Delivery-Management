<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $errorMessage = session('error'); // Retrieve error message from session
    return view('login', ['errorMessage' => $errorMessage]);
})->name('login'); 

Route::post('/', function () {
    $credentials = request()->only('email', 'password');

    // Hardcoded check (for testing purposes only)
    if ($credentials['email'] === 'test@example.com' && $credentials['password'] === 'pass_123') {
        // If the credentials match, simulate authentication using session
        Session::put('logged_in', true);

        // Redirect to the loading page with the dashboard as the redirect path
        return redirect('/employee_delivered');
    } else {
        // Incorrect credentials - redirect back to login with error message
        return redirect('/')->with('error', 'Invalid credentials');
    }
});


Route::get('/employee_transactions', function () {
    return view('employee_transactions');
});

Route::get('/employee_delivered', function () {
    return view('employee_delivered');
});

Route::get('/employee_pendingdel', function () {
    return view('employee_pendingdel');
});

Route::get('/employee_cancelled', function () {
    return view('employee_cancelled');
});

Route::get('/employee_returned', function () {
    return view('employee_returned');
});

Route::get('/pages_invoice', function () {
    return view('pages_invoice');
});