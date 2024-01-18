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
        return redirect('/employee_products');
    } else {
        // Incorrect credentials - redirect back to login with error message
        return redirect('/')->with('error', 'Invalid credentials');
    }
});

Route::get('/employee_products', function () {
    return view('employee_products');
});

Route::get('/employee_transactions', function () {
    return view('employee_transactions');
});

Route::get('/employee_pending', function () {
    return view('employee_pending');
});

Route::get('/employee_accepted', function () {
    return view('employee_accepted');
});

Route::get('/employee_declined', function () {
    return view('employee_declined');
});

// Route::get('/employee_requests', function () {
//     return view('employee_requests');
// });

Route::get('/employee_cancelled', function () {
    return view('employee_cancelled');
});

Route::get('/employee_returned', function () {
    return view('employee_returned');
});

Route::get('/pages_invoice', function () {
    return view('pages_invoice');
});