<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace' => "App\Http\Controllers"], function() {
	Route::group(['middleware' => ['auth:sanctum']], function () {
		///////////////////////////////
		// E-COMMERCE RELATED ROUTES //
		///////////////////////////////
		Route::group(['prefix' => 'e-commerce'], function() {
			/////////////////////
			// DELIVERY ROUTES //
			/////////////////////
			Route::group(['prefix' => 'delivery'], function() {
				// Store
				Route::get('/store', 'DeliveryController@store')->name('e-commerce.delivery.store');
			});

			////////////////////////
			// STOCK ORDER ROUTES //
			////////////////////////
			Route::group(['prefix' => 'stock-order'], function() {
				// Store
				Route::post('store', 'StockOrder@store')->name('e-commerce.stock_order.store');
			});
		});
	});
});