<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () 
{
    return view('Auth.register');
});

Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() 
{
    Route::resource('roles',RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('csts',CustomersController::class);
});


Route::get('/{page}',[AdminController::class ,'index']);








