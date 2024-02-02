r<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockOrder extends Model
{
    use HasFactory;

	 /**
	  * The database connection that should be used by the model.
	  *
	  * @var string
	  */
	protected $connection = 'mysql_spl_dlv';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'quantity',
		'tracking_number',
		'product_id',
		'supplier_id',
		'transaction_id',
		'delivery_id',
		'status',
		'estimated_delivery_at',
		'delivered_at',
	];

	/*
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'quantity' => 'integer',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'estimated_delivery_at' => 'datetime',
		'delivered_at' => 'datetime',
	];

	// ---------------------------------------------------
	// Relations
	// ---------------------------------------------------

	/**
	 * Get the product that owns the stock order.
	 */
	public function product() { return $this->belongsTo(Product::class); }

	/**
	 * Get the supplier that provides the stock order.
	 */
	public function supplier() { return $this->belongsTo(User::class); }

	/**
	 * Get the transaction that owns the stock order.
	 */
	public function transaction() { return $this->belongsTo(Transaction::class); }

	/**
	 * Get the delivery that owns the stock order.
	 */
	public function delivery() { return $this->belongsTo(Delivery::class); }

	// ---------------------------------------------------
	// Methods
	// ---------------------------------------------------

	/**
	 * Gets the lists of statuses
	 */
	public static function getStatuses(): array
	{
		return [
			0 => 'Created',
			1 => 'Pending',
			2 => 'Delivered',
			3 => 'Cancelled',
			4 => 'Defective-Returned'
		];
	}

	/**
	 * Gets the status of the delivery
	 */
	public function getStatus(): string
	{
		return self::getStatuses()[$this->status];
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @param bool $onlyDeliveredAt - If true, only the delivered_at field will be validated
	 *
	 * @return array<string, string>
	 */
	public static function getValidationRules($onlyDeliveredAt = false): array
	{
		$dlvAt = ['delivered_at' => ['nullable', 'date', 'after_or_equal:estimated_delivery_at']];
		$rules = [
			'quantity' => ['required', 'integer', 'min:1'],
			'tracking_number' => ['required', 'string', 'between:8,40'],
			'product_id' => ['required', 'integer', 'exists:' . Product::$connection . '.products,id'],
			'supplier_id' => ['required', 'integer', 'exists:' . User::$connection . '.users,id'],
			'transaction_id' => ['nullable', 'integer', 'exists:' . Transaction::$connection . '.transactions,id'],
			'delivery_id' => ['nullable', 'integer', 'exists:' . Delivery::$connection . '.deliveries,id'],
			'status' => ['nullable', 'integer', 'between:0,4'],
			'estimated_delivery_at' => ['required', 'date', 'after_or_equal:today'],
		];

		return $onlyDeliveredAt ? $dlvAt : array_merge($dlvAt, $rules);
	}

	/**
	 * Get the validation messages that apply to the request.
	 *
	 * @param bool $onlyDeliveredAt - If true, only the delivered_at field's message will be returned
	 *
	 * @return array<string, string>
	 */
	public static function getValidationMsgs($onlyDeliveredAt = false): array
	{
		$dlvAt = [
			// DELIVERED AT
			'delivered_at.date' => 'The delivered date must be a date.',
			'delivered_at.after_or_equal' => 'The delivered date must be the same as or later than the estimated delivery date.',
		];

		$msg = [
			// QUANTITY
			'quantity.required' => 'The quantity field is required.',
			'quantity.integer' => 'The quantity field must be an integer.',
			'quantity.min' => 'The quantity field must be at least 1.',
			// TRACKING NUMBER
			'tracking_number.required' => 'The tracking number field is required.',
			'tracking_number.string' => 'The tracking number field must be a string.',
			'tracking_number.between' => 'The tracking number field must be between 8 and 40 characters.',
			// PRODUCT ID
			'product_id.required' => 'The product item is required.',
			'product_id.integer' => 'The product item must be an integer.',
			'product_id.exists' => 'The product item does not exist.',
			// SUPPLIER ID
			'supplier_id.required' => 'The supplier is required.',
			'supplier_id.integer' => 'The supplier value must be an integer.',
			'supplier_id.exists' => 'The supplier does not exist.',
			// TRANSACTION ID
			'transaction_id.integer' => 'The transaction id must be an integer.',
			'transaction_id.exists' => 'The transaction does not exist.',
			// DELIVERY ID
			'delivery_id.integer' => 'The delivery id must be an integer.',
			'delivery_id.exists' => 'The delivery entry does not exist.',
			// STATUS
			'status.integer' => 'The status must be an integer.',
			'status.between' => 'The status must be between 0 and 4.',
			// ESTIMATED DELIVERY AT
			'estimated_delivery_at.required' => 'The estimated delivery date is required.',
			'estimated_delivery_at.date' => 'The estimated delivery date must be a date.',
			'estimated_delivery_at.after_or_equal' => 'The estimated delivery date must be today or later.',
		];

		return $onlyDeliveredAt ? $dlvAt : array_merge($dlvAt, $msg);
	}
}
