<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolesController;

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

Route::get('/', function(){
	return redirect()->route('login');
});

Auth::routes();
Route::group(['prefix' => 'admin'], function(){
	Route::group(['middleware' => ['auth']], function(){
		Route::get('/', function () {
	    	return view('admin.dashboard');
		});
		Route::resource('categories', CategoryController::class);
		Route::resource('users', UserController::class);
		Route::resource('roles', RolesController::class);
		Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');
	});
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
