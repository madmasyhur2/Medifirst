<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pharmacy extends Model
{
	use HasFactory, SoftDeletes;

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

	public function owner()
	{
		return $this->belongsTo(User::class);
	}
}
