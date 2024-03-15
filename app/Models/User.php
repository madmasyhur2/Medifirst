<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail, HasMedia
{
	use HasApiTokens, HasFactory, Notifiable, HasRoles, InteractsWithMedia;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'email',
		'password',
		'role',
		'avatar',
		'address',
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

	/**
	 * Get the avatar url
	 *
	 * @return string
	 */
	public function getAvatarUrlAttribute()
	{
		return $this->getFirstMediaUrl('avatars');
	}

	/**
	 * Get the user role name
	 *
	 * @return string
	 */
	public function getRoleNameAttribute()
	{
		if ($this->role == 'owner') return 'Pemilik Apotek';
		if ($this->role == 'finance') return 'Keuangan';
		if ($this->role == 'cashier') return 'Kasir';
		if ($this->role == 'warehouse') return 'Pergudangan';
		return '-';
	}
}
