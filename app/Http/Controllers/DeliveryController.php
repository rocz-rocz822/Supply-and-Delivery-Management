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
	// PENDING //
	protected function indexPending() {
		$deliveries = StockOrder::where('status', '<=', 1)
			->get();

		return view('pages.pending', [
			'pendings' => $deliveries,
		]);
	}

	// GENERAL ACTION //
	protected function updateStatus(Request $req, $id) {
		$validator = Validator::make(
			$req->all(),
			[
				'status' => 'required|integer|between:1,4',
			],
			[
				'status.required' => 'Status is required.',
				'status.integer' => 'Status must be an integer.',
				'status.between' => 'Please refrain from modifying the page.',
			]
		);

		if ($validator->fails()) {
			return redirect()
				->back()
				->withErrors($validator);
		}

		try {
			DB::beginTransaction();

			$clean = $validator->validated();

			$stockOrder = StockOrder::find($id);
			$stockOrder->status = $clean['status'];
			$stockOrder->save();

			DB::commit();
		} catch (Exception $e) {
			DB::rollBack();
			Log::error($e);

			return redirect()
				->back()
				->withErrors($e->getMessage());
		}

		return redirect()
			->route('e-commerce.delivery.pending')
			->with('success', "Status updated successfully to " . strtolower($stockOrder->getStatus()) . ".");
	}

	/////////////////
	// API METHODS //
	/////////////////

	// PENDING //
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
			Log::error($e);

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
