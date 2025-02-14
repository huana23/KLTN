<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateAdmin;
use App\Http\Middleware\AuthenticateUser;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/admin', function () {
    return view('layouts.admin.dashboard');
})->name('admin.dashboard')->middleware('auth.admin');  // Middleware cho admin

Route::get('/user', function () {
    return view('layouts.client.home');
})->name('client.home')->middleware('auth.user');  // Middleware cho user

Route::get('/login', [LoginController::class, 'showForm']);
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');


