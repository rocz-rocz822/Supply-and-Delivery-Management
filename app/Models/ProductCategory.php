<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductCategory extends Pivot
{
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
		'product_id',
		'category_id',
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
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'product_category';

	// ---------------------------------------------------
	// Relationships
	// ---------------------------------------------------

	/**
	 * Get the product that owns the category.
	 */
	public function product() { return $this->belongsTo(Product::class); }

	/**
	 * Get the category that owns the product.
	 */
	public function category() { return $this->belongsTo(Category::class); }
}
