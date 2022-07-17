<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontSiteController;
use App\Http\Controllers\AdminSiteController;
use App\Http\Controllers\Admin\postController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/',[frontSiteController::class,'showHome'])->name('index');


Route::prefix('Admin')->group(function () {
    Route::get('/',[AdminSiteController::class,'showDashboard'])->name('Dashboard');
    Route::resource('Admin', AdminController::class);
    Route::resource('Category', CategoryController::class);
    Route::resource('Post', postController::class);
    

});



Route::prefix('User')->group(function () {
    Route::get('/',[frontSiteController::class,'showHome'])->name('User');
    Route::get('/SinglCategory{id}',[frontSiteController::class,'showSinglCategory'])->name('SinglCategory');
    Route::get('/SinglPost{id}',[frontSiteController::class,'showSinglPost'])->name('SinglPost');
    Route::get('login',[frontSiteController::class,'showLogin'])->name('login');
    Route::get('register',[frontSiteController::class,'showRegister'])->name('register');
    });
