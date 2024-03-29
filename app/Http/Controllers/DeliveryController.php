<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Delivery;
use App\Models\Inventory;
use App\Models\StockOrder;

use DB;
use Exception;
use Log;
use stdClass;
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

	// DELIVERED //
	protected function indexDelivered() {
		$delivered = StockOrder::where('status', '=', 2)
			->get();

		return view('pages.delivered', [
			'delivered' => $delivered,
		]);
	}

	// CANCELLED //
	protected function indexCancelled() {
		$cancellations = StockOrder::where('status', '=', 3)
			->get();

		return view('pages.cancelled', [
			'cancellations' => $cancellations,
		]);
	}

	// RETURNED //
	protected function indexReturned() {
		$returnees = StockOrder::where('status', '=', 4)
			->get();

		return view('pages.defective', [
			'returnees' => $returnees,
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

			// Updates the status
			$stockOrder = StockOrder::find($id);
			$stockOrder->status = $clean['status'];

			// Set the action to be performed
			$status = $stockOrder->getStatus(true);
			$shouldUpdateInventory = false;
			switch ($status) {
				// If the status is delivered, set the delivered_at field to now as well
				case "delivered":
					$stockOrder->delivered_at = now()->timezone('Asia/Manila');
					$action = '+';
					$shouldUpdateInventory = true;
					break;

				case "defective-returned":
					$action = '-';
					$shouldUpdateInventory = true;
					break;
			}

			// Update the associated inventory
			if ($shouldUpdateInventory) {
				$inventoryUpdate = Request::create('/api/inventory/update', 'POST', [
					'product_id' => $stockOrder->product_id,
					'quantity' => $stockOrder->quantity,
					'action' => $action,
				]);

				$responseJSON = json_decode(
					app()->handle($inventoryUpdate)->getContent(),
					true
				);
				$response = new stdClass();
				foreach ($responseJSON as $key => $value) {
					$response->{$key} = $value;
				}

				if (!$response->success) {
					throw new Exception($response->message);
				}
			}

			// Saves the changes
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
			->back()
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
