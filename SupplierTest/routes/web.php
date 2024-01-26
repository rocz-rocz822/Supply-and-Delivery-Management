<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuppliesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', function () {
    $errorMessage = session('error'); // Retrieve error message from session
    return view('admin.login', ['errorMessage' => $errorMessage]);
})->name('login');

Route::post('/', function () {
    $credentials = request()->only('email', 'password');

    // Hardcoded check (for testing purposes only)
    if ($credentials['email'] === 'supplier@cometal.com' && $credentials['password'] === 'pass_123') {
        // If the credentials match, simulate authentication using session
        Session::put('logged_in', true);

        // Redirect to the loading page with the dashboard as the redirect path
        return view('admin.index', [AdminController::class, 'dashboard']);
    // Hardcoded check (for testing purposes only)
    }elseif ($credentials['email'] === 'delivery@cometal.com' && $credentials['password'] === 'pass_123') {
        // If the credentials match, simulate authentication using session
        Session::put('logged_in', true);

        // Redirect to the loading page with the dashboard as the redirect path
        return redirect('/employee_delivered');
    } else {
        // Incorrect credentials - redirect back to login with error message
        return view('admin.login')->with('error', 'Invalid credentials');
    }
});

Route::get('admin/index', [AdminController::class, 'dashboard'])->name('admin.index');
Route::get('admin/supply', [AdminController::class, 'supply'])->name('admin.supply');
Route::get('admin/returned', [AdminController::class, 'returned'])->name('admin.returned');
Route::get('admin/defectives', [AdminController::class, 'defectives'])->name('admin.defectives');
Route::get('admin/transaction', [AdminController::class, 'transaction'])->name('admin.transaction');
Route::get('admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('admin/create',[AdminController::class, 'create'])->name('admin.create');

//wala na 'tong controller na toh
// Route::get('admin/index', [SuppliesController::class, 'dashboard'])->name('admin.index');
// Route::get('admin/create', [SuppliesController::class, 'create'])->name('admincreate');

// Route::controller(AdminController::class)->group(function() {
//     Route::get('admin/index', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.index');
//     Route::get('admin/supply', [App\Http\Controllers\AdminController::class, 'supply'])->name('admin.supply');
//     Route::get('admin/returned', [App\Http\Controllers\AdminController::class, 'returned'])->name('admin.returned');
//     Route::get('admin/defectives', [App\Http\Controllers\AdminController::class, 'defectives'])->name('admin.defectives');

//     Route::get('admin/transaction', [App\Http\Controllers\AdminController::class, 'transaction'])->name('admin.transaction');
// });

// Route::controller(SuppliesController::class)->group(function() {
//     Route::get('admin/index', [App\Http\Controllers\SuppliesController::class, 'dashboard'])->name('admin.index');    
//     Route::get('admin/create', [App\Http\Controllers\SuppliesController::class, 'create'])->name('admincreate');
// });

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

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