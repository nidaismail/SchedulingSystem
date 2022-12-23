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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::post('/save', [App\Http\Controllers\HomeController::class, 'store'])->name('save');

Auth::routes();

Route::get('/viewdata', [App\Http\Controllers\UserdashboardController::class, 'preview'])->name('viewdata');
Route::post('/admissible', [App\Http\Controllers\UserdashboardController::class, 'admissible'])->name('admissible');
