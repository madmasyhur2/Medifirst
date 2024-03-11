<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function show()
	{
		$user_id = auth()->user()->id;
		$user = User::where('id', $user_id)->first();
		// dd($user);
		return view('pages.admin.profiles.show', [
			'pageTitle' => 'Akun Owner',
			'user' => $user,
		]);
	}
}
