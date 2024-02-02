<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
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
		'quantity',
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
	 * Get the product that owns the supply.
	 */
	public function product() { return $this->belongsTo(Product::class); }
}
