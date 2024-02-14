<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inventory;

use DB;
use Exception;
use Log;
use Validator;

class InventoryController extends Controller
{
    // API METHODS //
	public function update(Request $req) {
		$validator = Validator::make(
			$req->all(),
			[
				'product_id' => 'required|integer',
				'quantity' => 'required|integer',
				'action' => 'required|string|in:+,-,add,subtract'
			],
			[
				'product_id.required' => 'Product ID is required.',
				'product_id.integer' => 'Product ID must be an integer.',
				'quantity.required' => 'Quantity is required.',
				'quantity.integer' => 'Quantity must be an integer.',
				'action.required' => 'Action is required.',
				'action.string' => 'Action must be a string.',
				'action.in' => 'Action must be either "+", "-", "add", or "subtract".',
			]
		);

		if ($validator->fails()) {
			return response()->json([
				'success' => false,
				'errors' => $validator->errors(),
			]);
		}

		try {
			DB::beginTransaction();

			$cleaned = $validator->validated();

			// Check if inventory item exists.
			$inventory = Inventory::find($cleaned['product_id']);
			$invIsNull = $inventory == null;

			// Check if the action is to add or subtract.
			if (preg_match('/(\+)|(add)/', $cleaned['action'])) {
				// If it is, then make the quantity positive.
				$cleaned['quantity'] = abs($cleaned['quantity']);
			}
			else if (preg_match('/(-)|(subtract)/', $cleaned['action'])) {
				// Checks whether the inventory item exists.
				if ($invIsNull) {
					throw new Exception('Inventory item does not exist.');
				}

				// Checks whether the quantity can be subtracted from the stock.
				if ($inventory->stock < $cleaned['quantity']) {
					throw new Exception('Insufficient stock.');
				}

				// If all is good, then make the quantity negative.
				$cleaned['quantity'] = -abs($cleaned['quantity']);
			}

			// If it does, just update the stock by adding the new quantity.
			$stock = $inventory->stock;
			$inventory = Inventory::updateOrCreate([
				'product_id' => $cleaned['product_id']
			], [
				// If it doesn't, create a new inventory item with the quantity as its initial stock amount.
				'stock' => ($invIsNull ? 0 : $stock) + $cleaned['quantity'],
			]);

			DB::commit();
		} catch (Exception $e) {
			DB::rollBack();
			Log::error($e);

			return response()->json([
				'success' => false,
				'errors' => $e->getMessage(),
			]);
		}

		return response()->json([
			'success' => true,
			'inventory' => $inventory,
		], 201);
	}
}
