<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
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
		'role',
		'description',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array<int, string>
	 */
	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'deleted_at' => 'datetime',
	];

	// ---------------------------------------------------
	// Relationships
	// ---------------------------------------------------

	/**
	 * Get the users for the role.
	 */
	public function users() { return $this->hasMany(User::class); }
}
