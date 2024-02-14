<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
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
		'courier_name',
		'shipped_at',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'estimated_delivery_at' => 'datetime',
		'delivered_at' => 'datetime',
	];

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
			'courier_name' => ['required', 'string', 'min:1'],
			'shipped_at' => ['nullable', 'date', 'before_or_equal:today'],
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
			// COURIER NAME
			'courier_name.required' => 'The courier name is required.',
			'courier_name.string' => 'The courier name must be a string.',
			'courier_name.min' => 'The courier name must be at least :min characters.',
			// SHIPPED AT
			'shipped_at.date' => 'The day the shipping date must be a date.',
			'shipped_at.before_or_equal' => 'The shipping date must be a date before or equal to today.',
		];
	}
}
