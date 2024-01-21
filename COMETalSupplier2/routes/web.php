<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('admin/supplies', [App\Http\Controllers\AdminController::class, 'supplies'])->name('admin.supplies');
    Route::get('admin/returned', [App\Http\Controllers\AdminController::class, 'returned'])->name('admin.returned');
    Route::get('admin/defectives', [App\Http\Controllers\AdminController::class, 'defectives'])->name('admin.defectives');

    Route::get('admin/transaction', [App\Http\Controllers\AdminController::class, 'transaction'])->name('admin.transaction');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
