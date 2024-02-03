<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Supply;

use DB;
use Exception;
use Log;
use stdClass;
use Validator;

class SupplyController extends Controller
{
	private $conn = [
		"mysql_spl_dlv",
		"mysql_prd_inv",
	];

    protected function index() {
		$supplies = Supply::get();

		return view('pages.supply', [
			'supplies' => $supplies,
			'hasSupplies' => count($supplies) > 0,
		]);
	}

	protected function create() {
		$categories = Category::orderBy('category', 'ASC')
			->get();

		$products = Product::orderBy('name', 'ASC')
			->get();

        return view('action.create', [
			'categories' => $categories,
			'products' => $products,
		]);
    }

	protected function store(Request $req) {
		$validator = Validator::make(
			$req->all(),
			array_merge(
				Category::getValidationRules(),
				Product::getValidationRules(),
				['quantity' => ['required', 'numeric', 'min:1']],
			),
			array_merge(
				Category::getValidationMsgs(),
				Product::getValidationMsgs(),
				[
					'quantity.required' => 'Please enter a quantity.',
					'quantity.numeric' => 'Please enter a valid quantity.',
					'quantity.min' => 'Quantity should at least be 1.',
				]
			)
		);

		if ($validator->fails()) {
			return redirect()
				->route('e-commerce.supply.create')
				->withErrors($validator)
				->withInput();
		}

		try {
			DB::beginTransaction();

			$clean = $validator->validated();

			Supply::create([
				'product_id' => $clean['product'],
				'quantity' => $clean['quantity'],
			]);

			ProductCategory::firstOrCreate([
				'product_id' => $clean['product'],
				'category_id' => $clean['category'],
			]);

			DB::commit();
		} catch (Exception $e) {
			DB::rollback();
			Log::error($e);

			return redirect()
				->route('e-commerce.supply.create')
				->with('error', 'An error occurred while processing your request.');
		}

		return redirect()
			->route('e-commerce.supply.index')
			->with('success', 'Supply has been successfully created.');
	}

	protected function destroy($id) {
		try {
			DB::beginTransaction();

			$supply = Supply::find($id);

			if ($supply == null) {
				return redirect()
					->back()
					->with('error', 'The selected supply does not exist.');
			}

			$supply->delete();

			DB::commit();
		} catch (Exception $e) {
			DB::rollback();
			Log::error($e);

			return redirect()
				->back()
				->with('error', 'An error occurred while processing your request.');
		}

		return redirect()
			->back()
			->with('success', 'The selected supply has been successfully deleted.');
	}

	protected function deliver(Request $req) {
		$validator = Validator::make(
			$req->all(),
			[
				'courier_name' => ['required', 'string', 'min:1'],
				'supplies' => ['required', 'array', 'min:1'],
				'supplies.*' => ['required', 'integer', 'min:1', 'exists:' . $this->conn[0] . '.supplies,id'],
			],
			[
				// COURIER NAME
				'courier_name.required' => 'Please enter the courier name.',
				'courier_name.string' => 'Please enter a valid courier name.',
				'courier_name.min' => 'Please enter a valid courier name.',
				// SUPPLIES
				'supplies.required' => 'Please select at least one supply to deliver.',
				'supplies.array' => 'The supplies field must be an array.',
				'supplies.min' => 'Please select at least one supply to deliver.',
				// SUPPLY ITEM
				'supplies.*.required' => 'Please select a supply to deliver.',
				'supplies.*.integer' => 'The selected supply must be an integer.',
				'supplies.*.min' => 'The selected supply must be at least 1.',
				'supplies.*.exists' => 'The selected supply does not exist.',
			]
		);

		if ($validator->fails()) {
			return redirect()
				->back()
				->withErrors($validator)
				->withInput();
		}

		try {
			DB::beginTransaction();

			$clean = $validator->validated();
			$app = app();

			// TRANSACTION CREATION
			$transReq = Request::create('/api/e-commerce/transaction/store', 'POST');
			$responseJSON = json_decode(
				$app->handle($transReq)->getContent(),
				true
			);
			$response = new stdClass();
			foreach ($responseJSON as $key => $value) {
				$response->{$key} = $value;
			}

			if (!$response->success) {
				throw new Exception($response->errors);
			}

			$transaction = new stdClass();
			foreach ($response->transaction as $key => $value) {
				$transaction->{$key} = $value;
			}

			// DELIVERY CREATION
			$deliveryReq = Request::create('/api/e-commerce/delivery/store', 'POST', [
				'courier_name' => $clean['courier_name'],
				'shipped_at' => now()->timezone('Asia/Manila')->format('Y-m-d'),
			]);
			$responseJSON = json_decode(
				$app->handle($deliveryReq)->getContent(),
				true
			);
			$response = new stdClass();
			foreach ($responseJSON as $key => $value) {
				$response->{$key} = $value;
			}

			if (!$response->success) {
				throw new Exception($response->errors);
			}

			$delivery = new stdClass();
			foreach ($response->delivery as $key => $value) {
				$delivery->{$key} = $value;
			}

			// STOCK ORDER CREATION
			foreach ($clean['supplies'] as $supply) {
				$supply = Supply::find($supply);

				$soReq = Request::create('/api/e-commerce/stock-order/store', 'POST', [
					'quantity' => $supply->quantity,
					'product_id' => $supply->product_id,
					'supplier_id' => auth()->user()->id,
					'transaction_id' => $transaction->id,
					'delivery_id' => $delivery->id,
					'estimated_delivery_at' => now()->addDays(3)->format('Y-m-d'),
				]);
				$responseJSON = json_decode(
					$app->handle($soReq)->getContent(),
					true
				);
				$response = new stdClass();
				foreach ($responseJSON as $key => $value) {
					$response->{$key} = $value;
				}

				if (!$response->success) {
					throw new Exception($response->errors);
				}

				$stockOrder = new stdClass();
				foreach ($response->stock_order as $key => $value) {
					$stockOrder->{$key} = $value;
				}

				$supply->delete();
			}

			DB::commit();
		} catch (Exception $e) {
			DB::rollback();
			Log::error($e);

			return redirect()
				->back()
				->with('error', 'An error occurred while processing your request.');
		}

		return redirect()
			->back()
			->with('success', 'The selected supplies have been successfully delivered.');
	}
}
