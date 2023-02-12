<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});


Route::get('/register', [App\Http\Controllers\UserController::class, 'register']);
Route::post('/login', [App\Http\Controllers\UserController::class, 'authenticate'])->name('login');
Route::get('/login', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [App\Http\Controllers\EmployeesController::class, 'index']);

// Route::get('/sample', [App\Http\Controllers\EmployeesController::class, 'index']);
Route::post('/store', [App\Http\Controllers\UserController::class, 'store']);