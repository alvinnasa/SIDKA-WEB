<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KorbanController;
use App\Http\Controllers\PelakuController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\UserCenterController;


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


Route::get('/', [App\Http\Controllers\CountController::class,'count']);


Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
        Route::resource('kasus', UserController::class);
        Route::resource('korban', KorbanController::class);
        Route::resource('pelaku', PelakuController::class);
        Route::resource('pelayanan', PelayananController::class);
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('add-user', UserCenterController::class);

    });
    Route::group(['middleware' => ['cek_login:editor']], function () {
        
    });
});
