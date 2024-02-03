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

// Route::get('pages/index', [AdminController::class, 'dashboard'])->name('pages.index');
Route::get('pages/receipt', [App\Http\Controllers\AdminController::class, 'receipt'])->name('pages.receipt');
Route::get('action/invoice', [App\Http\Controllers\AdminController::class, 'invoice'])->name('action.invoice');

Route::group(['namespace' => "App\Http\Controllers"], function() {
	Route::group(['middleware' => ['guest']], function () {
		// Landing Page
		Route::get('/', 'AdminController@index')->name('index');
	});

	Route::group(['middleware' => ['auth', 'verified']], function () {
		// Dashboard
		// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

		///////////////////////////////
		// E-COMMERCE RELATED ROUTES //
		///////////////////////////////
		Route::group(['prefix' => 'e-commerce'], function() {
			///////////////////
			// SUPPLY ROUTES //
			///////////////////
			Route::group(['prefix' => 'supply'], function() {
				// Index
				Route::get('/', 'SupplyController@index')->name('e-commerce.supply.index');

				// Create
				Route::get('create', 'SupplyController@create')->name('e-commerce.supply.create');
				Route::post('store', 'SupplyController@store')->name('e-commerce.supply.store');

				// Deliver
				Route::post('deliver', 'SupplyController@deliver')->name('e-commerce.supply.deliver');

				// Delete
				Route::delete('destroy/{id}', 'SupplyController@destroy')->name('e-commerce.supply.destroy');
			});

			/////////////////////
			// DELIVERY ROUTES //
			/////////////////////
			Route::group(['prefix' => 'delivery'], function() {
				// PENDING //
				Route::group(['prefix' => 'pending'], function() {
					// Index
					Route::get('/', 'DeliveryController@indexPending')->name('e-commerce.delivery.pending');
				});

				// DELIVERED //
				Route::group(['prefix' => 'delivered'], function() {
					// Index
					Route::get('/', 'DeliveryController@indexDelivered')->name('e-commerce.delivery.delivered');
				});

				// Update
				Route::patch('update/{id}/status', 'DeliveryController@updateStatus')->name('e-commerce.delivery.update.status');
			});

			/////////////
			// RETURNS //
			/////////////
			Route::group(['prefix' => 'returns'], function() {
				// CANCELLED //
				Route::group(['prefix' => 'cancelled'], function() {
					// Index
					Route::get('/', 'DeliveryController@indexCancelled')->name('e-commerce.returns.cancelled');
				});

				// DEFECTIVE //
				Route::group(['prefix' => 'defective'], function() {
					// Index
					Route::get('/', 'DeliveryController@indexReturned')->name('e-commerce.returns.defective');
				});
			});
		});

		////////////////////
		// PROFILE ROUTES //
		////////////////////
		// Route::group(['prefix' => 'profile'], function() {
		// 	// Index
		// 	Route::get('/', 'ProfileController@index')->name('profile.index');

		// 	// Update
		// 	Route::patch('/', 'ProfileController@update')->name('profile.update');

		// 	// Destroy
		// 	Route::delete('/', 'ProfileController@destroy')->name('profile.destroy');
		// });
	});
});

require __DIR__.'/auth.php';
