<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'first_name',
		'middle_name',
		'last_name',
        'email',
        'password',
		'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

	// ---------------------------------------------------
	// Relationships
	// ---------------------------------------------------

	/**
	 * Get the role that owns the user.
	 */
	public function role() { return $this->belongsTo(Role::class); }

	// ---------------------------------------------------
	// Methods
	// ---------------------------------------------------

	/**
	 * Get the user's full name.
	 *
	 * @return string
	 */
	public function getName($includeMiddleName = false) {
		$middle = $includeMiddleName ? " {$this->middle_name} " : ' ';

		return "{$this->first_name}{$middle}{$this->last_name}";
	}
}
