<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
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

	// ---------------------------------------------------
	// Relationships
	// ---------------------------------------------------

	/**
	 * Get the products for the category.
	 */
	public function products() { return $this->belongsToMany(Product::class); }

	/**
	 * Get the product categories for the category.
	 */
	public function productCategories() { return $this->hasMany(ProductCategory::class); }

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
			'category' => [
				'required',
				'numeric',
				'min:1',
				'exists:mysql_prd_inv.categories,id'],
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
			'category.required' => 'Please select a category.',
			'category.numeric' => 'Please refrain from modifying the form.',
			'category.min' => 'Please select a valid category.',
			'category.exists' => 'Selected category does not exists anymore.',
		];
	}
}
