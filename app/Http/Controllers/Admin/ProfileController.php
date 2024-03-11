<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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

	public function update(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'avatar' => ['nullable', 'image', 'size:2048'],
			'name' => ['required', 'string', 'max:255'],
			'role' => ['required'],
			'address' => ['required', 'string'],
			'email' => ['required', 'email'],
			'password' => ['required'],
		]);

		if ($validator->fails()) {
			return back()->with('errors', $validator->messages()->all()[0])->withInput();
		}

		dd($request->all());
	}
}
