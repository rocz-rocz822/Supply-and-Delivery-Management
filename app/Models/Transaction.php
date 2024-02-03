<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Validator;

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
		'transaction_number'
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

	// ---------------------------------------------------
	// Methods
	// ---------------------------------------------------

	/**
	 * Get the validation rules that apply to the data.
	 *
	 * @return array
	 */
	public static function getValidationRules(): array
	{
		return [
			'transaction_number' => ['required', 'string', 'between:8,40', 'unique:mysql_spl_dlv.transactions,transaction_number'],
		];
	}

	/**
	 * Get the validation messages that apply to the data.
	 *
	 * @return array
	 */
	public static function getValidationMsgs(): array
	{
		return [
			'transaction_number.required' => 'Please enter a transaction number.',
			'transaction_number.string' => 'Please enter a valid transaction number.',
			'transaction_number.between' => 'Transaction number should be between 8 and 40 characters.',
		];
	}

	/**
	 * Validate the data.
	 *
	 * @param array $data
	 * @return Validator
	 */
	public static function validate(array $data)
	{
		return Validator::make($data, self::getValidationRules(), self::getValidationMsgs());
	}

	public static function generateTransactionNumber(): string
	{
		return preg_replace(
			'/^(.{' . rand(3, 5) . '})(.{' . rand(3, 5) . '})(.{' . rand(6, 10) . '})(.*$)/', "$1-$2-$3",
			str()->ulid()
		);
	}
}
