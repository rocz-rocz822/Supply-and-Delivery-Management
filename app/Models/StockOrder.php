<?php

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
		'product_id',
		'supplier_id',
		'customer_id',
		'transaction_id',
		'delivery_id',
		'quantity',
		'status',
	];

	/*
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'quantity' => 'integer',
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
}
