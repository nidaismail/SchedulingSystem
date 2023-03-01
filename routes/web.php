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
// Route::get('/login/{id}', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Auth::routes();
    Route::get('/get-user-details/{userID}', [App\Http\Controllers\Auth\LoginController::class, 'getUserDetails']);



    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Auth::routes();
    
    Route::post('/save', [App\Http\Controllers\HomeController::class, 'store'])->name('save');
    
    Auth::routes();
    
    Route::post('/locationCheck', [App\Http\Controllers\HomeController::class, 'check'])->name('locationCheck');
    
    Auth::routes();
    
    Route::get('/viewdata', [App\Http\Controllers\UserdashboardController::class, 'preview'])->name('viewdata');
    
    Route::post('/admissible', [App\Http\Controllers\UserdashboardController::class, 'admissible'])->name('admissible');  





// 
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [App\Http\Controllers\AdmindashboardController::class, 'dataWithdate'])->name('dataWithdate');

});

//Route::get('/admin', [App\Http\Controllers\AdmindashboardController::class, 'admindata']);
// Route::get('/next', [App\Http\Controllers\AdmindashboardController::class, 'nextdata'])->name('next');

