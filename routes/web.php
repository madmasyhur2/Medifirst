<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', function () {
	return view('welcome');
});

Auth::routes(['verify' => true]);

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
	// Dashboard
	Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

	// Profiles
	Route::get('/profiles', [AdminProfileController::class, 'show'])->name('profiles.show');
	Route::put('/profiles/update', [AdminProfileController::class, 'update'])->name('profiles.update');
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');

// Login-Register-Logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// // email verification notice
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');
// // email verification handler
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
// 	$request->fulfill();
// 	return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');
// // resending the verification email
// Route::post('/email/verification-notification', function (Request $request) {
// 	$request->user()->sendEmailVerificationNotification();
// 	return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// test sweet alert
Route::get('/test', function () {
	Alert::success('Success Title', 'Success Message');
	// Alert::error('Error Title', 'Error Message');
	// Alert::warning('Warning Title', 'Warning Message');
	// Alert::info('Info Title', 'Info Message');
	// Alert::question('Question Title', 'Question Message');
	// toast('Success Message', 'success');
	// toast('Info Message', 'info');
	// toast('Error Message', 'error');
	// toast('Warning Message', 'warning');
	// toast('Question Message', 'question');
	return view('welcome');
});
