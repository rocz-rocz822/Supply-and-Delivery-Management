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
use Validator;

class SupplyController extends Controller
{
	private $conn = [];

	public function __construct() {
		$this->conn["SPL_DLV"] = config('database.connections.mysql_spl_dlv.database');
		$this->conn["PRD_INV"] = config('database.connections.mysql_prd_inv.database');
	}

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

			ProductCategory::create([
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
}
