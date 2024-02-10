<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StockOrder;
use App\Models\Transaction;

use DB;
use Exception;
use Log;

class TransactionController extends Controller
{
	protected function index() {
		$transactions = StockOrder::all();

		return view('pages.receipt', [
			'transactions' => $transactions,
		]);
	}

	/////////////////
	// API METHODS //
	/////////////////
	protected function store() {
		$validator = Transaction::validate(
			['transaction_number' => Transaction::generateTransactionNumber()]
		);

		while($validator->fails()) {
			$validator = Transaction::validate(
				['transaction_number' => Transaction::generateTransactionNumber()]
			);
		}

		try {
			DB::beginTransaction();

			$clean = $validator->validated();

			$transaction = Transaction::create([
				'transaction_number' => $clean['transaction_number'],
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
			'transaction' => $transaction,
		], 201);
	}
}
