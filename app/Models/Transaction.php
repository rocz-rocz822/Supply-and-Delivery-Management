<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
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
	 * @var array
	 */
	protected $fillable = [
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	];

	// ---------------------------------------------------
	// Relationships
	// ---------------------------------------------------

	/**
	 * Get the stock orders for the transaction.
	 */
	public function stockOrders() { return $this->hasMany(StockOrder::class); }
}
