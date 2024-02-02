<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StockOrder;

use DB;
use Exception;
use Log;
use Validator;

class StockOrderController extends Controller
{
	protected function index() {
		return view('pages.delivered');
	}

	/////////////////
	// API METHODS //
	/////////////////
	protected function store(Request $req) {
		if (!$req->has('tracking_number')) {
			$trackingID = preg_replace(
				'/^(.{' . rand(3, 5) . '})(.{' . rand(3, 5) . '})(.{' . rand(6, 10) . '})(.*$)/', "$1-$2-$3",
				str()->ulid()
			);

			$req->merge(['tracking_number' => $trackingID]);
		}

		$validator = Validator::make(
			$req->all(),
			array_merge(
				StockOrder::getValidationRules(),
				[
					'products' => ['required', 'array', 'min:1'],
					'products.*' => ['required', 'integer', 'min:1, exists:mysql_prd_inv.products,id'],
				]
			),
			array_merge(
				StockOrder::getValidationMsgs(),
				[
					// PRODUCTS ARRAY
					'products.required' => 'The products field is required.',
					'products.array' => 'The products field must be an array.',
					'products.min' => 'The products field must have at least one item.',
					// PRODUCT ITEM
					'products.*.required' => 'The product item is required.',
					'products.*.integer' => 'The product item must be an integer.',
					'products.*.min' => 'The product item must be at least 1.',
					'products.*.exists' => 'The product item does not exist.',
				]
			)
		);

		if ($validator->fails()) {
			return response()->json([
				'success' => false,
				'errors' => $validator->errors(),
			], 400);
		}

		try {
			DB::beginTransaction();

			$clean = $validator->validated();

			// Create the stock order
			$stock_order = StockOrder::create([
				'quantity' => $clean['quantity'],
				'tracking_number' => $clean['tracking_number'],
				'product_id' => $clean['product_id'],
				'supplier_id' => $clean['supplier_id'],
				'transaction_id' => $clean['transaction_id'],
				'delivery_id' => $clean['delivery_id'],
				'status' => $clean['status'],
				'estimated_delivery_at' => $clean['estimated_delivery_at'],
			]);

			// Attach the products to the stock order
			$stock_order->product()->associate($clean['products']);

			// Save the changes
			$stock_order->save();

			DB::commit();
		} catch (Exception $e) {
			DB::rollBack();
			Log::error($e->getMessage());

			return response()->json([
				'success' => false,
				'errors' => $e->getMessage(),
			], 500);
		}

		return response()->json([
			'success' => true,
			'delivery' => $delivery,
		], 201);
	}
}
