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
    return view('pages.dashboard');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('pages/index', [AdminController::class, 'dashboard'])->name('pages.index');
Route::get('pages/delivered', [App\Http\Controllers\AdminController::class, 'delivered'])->name('pages.delivered');
Route::get('pages/pending', [App\Http\Controllers\AdminController::class, 'pending'])->name('pages.pending');
Route::get('pages/cancelled', [App\Http\Controllers\AdminController::class, 'cancelled'])->name('pages.cancelled');
Route::get('pages/defective', [App\Http\Controllers\AdminController::class, 'defective'])->name('pages.defective');
Route::get('pages/receipt', [App\Http\Controllers\AdminController::class, 'receipt'])->name('pages.receipt');
Route::get('action/invoice', [App\Http\Controllers\AdminController::class, 'invoice'])->name('action.invoice');
Route::get('pages/supply', [App\Http\Controllers\AdminController::class, 'supply'])->name('pages.supply');
Route::post('action/create',[App\Http\Controllers\AdminController::class, 'create'])->name('action.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
