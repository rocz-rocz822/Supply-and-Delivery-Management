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
	public function categories() { return $this->belongsToMany(Category::class, 'product_category'); }

	/**
	 * Get the inventory for the product.
	 */
	public function inventory() { return $this->hasOne(Inventory::class); }

	/**
	 * Get the supplies for the product.
	 */
	public function supplies() { return $this->hasMany(Supply::class); }

	// ---------------------------------------------------
	// Methods
	// ---------------------------------------------------

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, string>
	 */
	public static function getValidationRules(): array
	{
		return [
			'product' => [
				'required',
				'numeric',
				'min:1',
				'exists:mysql_prd_inv.products,id'],
		];
	}

	/**
	 * Get the validation messages that apply to the request.
	 *
	 * @return array<string, string>
	 */
	public static function getValidationMsgs(): array
	{
		return [
			'product.required' => 'Please select a product.',
			'product.numeric' => 'Please refrain from modifying the form.',
			'product.min' => 'Please select a valid product.',
			'product.exists' => 'Selected product does not exists anymore.',
		];
	}
}
