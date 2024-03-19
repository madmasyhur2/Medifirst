<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
	/**
	 * index
	 *
	 * @return void
	 */
	public function index()
	{
		try {
			$user_id = auth()->user()->id;
			$user = User::where('id', $user_id)->first();
			// dd($user);
			return view('pages.admin.profiles.index', [
				'user' => $user,
			]);
		} catch (\Throwable $th) {
			//throw $th;
		}
	}

	/**
	 * edit
	 *
	 * @return void
	 */
	public function edit()
	{
		try {
			$user = User::where('id', auth()->user()->id)->first();
			return view('pages.admin.profiles.edit', [
				'user' => $user,
			]);
		} catch (\Throwable $th) {
			//throw $th;
			alert()->error($th->getMessage());
			return back();
		}
	}

	/**
	 * update
	 *
	 * @param  mixed $request
	 * @return void
	 */
	public function update(Request $request)
	{
		try {
			$validator = Validator::make($request->all(), [
				'avatar' => ['nullable', 'image', 'max:2048'],
				'name' => ['required', 'string', 'max:255'],
				'role' => ['required'],
				'address' => ['required', 'string'],
				'email' => ['required', 'email'],
				'password' => ['nullable'],
			]);

			if ($validator->fails()) {
				return back()->with('errors', $validator->messages()->all()[0])->withInput();
			}

			$validated = $request->all();
			$user = User::where('id', auth()->user()->id)->first();

			// dd($validated);

			// password
			if ($validated['password'] == null) {
				$validated['password'] = auth()->user()->password;
			} else {
				$validated['password'] = bcrypt($validated['password']);
			}

			// update or remove avatar
			if (isset($request->avatar_remove) && $request->avatar_remove == 1) {
				if ($user->hasMedia('avatars')) {
					$user->clearMediaCollection('avatars');
					return redirect()->route('admin.profiles.index')->with('success', 'Avatar user berhasil dihapus');
				}
				return back()->with('errors', 'User tida memiliki foto avatar')->withInput();
			}

			if ($request->hasFile('avatar')) {
				if ($user->hasMedia('avatars')) {
					$user->clearMediaCollection('avatars');
				}
				$user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
			}

			// dd($validated);

			$update = $user->update($validated);
			if ($update) {
				alert()->success('Perubahan berhasil disimpan!');
				return redirect()->route('admin.profiles.index');
			}
		} catch (\Throwable $th) {
			alert()->error($th->getMessage());
			return back();
		}
	}
}
