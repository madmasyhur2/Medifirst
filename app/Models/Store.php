<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'owner_id',
		'logo_photo_path',
		'name',
		'address',
		'province',
		'city',
		'district',
		'village',
		'license_photo_path',
	];

	public function products()
	{
		return $this->hasMany(Product::class);
	}

	//relation dengan role owner 1 to many
}
