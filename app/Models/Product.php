<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

	 /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql_prd_inv';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'description',
		'price',
		'image',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'created_at',
		'updated_at',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'price' => 'decimal:2',
	];

	// ---------------------------------------------------
	// Relationships
	// ---------------------------------------------------

	/**
	 * Get the categories for the product.
	 */
	public function categories() { return $this->belongsToMany(Category::class); }

	/**
	 * Get the inventory for the product.
	 */
	public function inventory() { return $this->hasOne(Inventory::class); }

	/**
	 * Get the supplies for the product.
	 */
	public function supplies() { return $this->hasMany(Supply::class); }
}
