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
	/////////////////
	// API METHODS //
	/////////////////
	protected function store(Request $req) {
		if (!$req->has('tracking_number')) {
			$req->merge(['tracking_number' => StockOrder::generateTrackingNumber()]);
		}

		$validator = Validator::make(
			$req->all(),
			StockOrder::getValidationRules(),
			StockOrder::getValidationMsgs(),
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
				'transaction_id' => $clean['transaction_id'] ?? null,
				'delivery_id' => $clean['delivery_id'] ?? null,
				'status' => $clean['status'] ?? 0,
				'estimated_delivery_at' => $clean['estimated_delivery_at'],
			]);

			DB::commit();
		} catch (Exception $e) {
			DB::rollBack();
			Log::error($e);

			return response()->json([
				'success' => false,
				'errors' => $e->getMessage(),
			], 500);
		}

		return response()->json([
			'success' => true,
			'stock_order' => $stock_order,
		], 201);
	}
}
