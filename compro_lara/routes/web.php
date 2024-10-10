<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

//userauth
Route::get('/login', [UserController::class ,'formlogin'])->name('formlogin');
Route::get('/register', [UserController::class ,'formregis'])->name('formregist');
Route::post('/register', [UserController::class ,'register'])->name('register');
Route::post('/login', [UserController::class ,'login'])->name('login');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
