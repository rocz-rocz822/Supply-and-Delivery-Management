<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Delivery;
use App\Models\StockOrder;
use DB;
use Exception;
use Log;
use Validator;

class DeliveryController extends Controller
{
	protected function index() {
		return view('pages.delivered');
	}

	/////////////////
	// API METHODS //
	/////////////////
	protected function store(Request $req) {
		$validator = Validator::make(
			$req->all(),
			Delivery::getValidationRules(),
			Delivery::getValidationMsgs()
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

			$delivery = Delivery::create(
				[
					'courier_name' => $clean['courier_name'],
					'shipped_at' => $clean['shipped_at'] ?? null,
				]
			);

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
