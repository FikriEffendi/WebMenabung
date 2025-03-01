<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::inertia('/', 'views/home/page-home')->middleware('auth');

Route::inertia('/login', 'auth/page-login')->name('login');
Route::inertia('/register', 'auth/page-register');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
