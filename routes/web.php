<?php

use App\Http\Controllers\Controllers\KategoriController;
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

Route::get('/', 'AwalController@index');
Route::get('/booking', 'AwalController@booking');
Route::post('/hasil', 'AwalController@hasil');

Route::get('/login','AuthController@index')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/kategori', 'KategoriController@index');
    Route::post('/admin/kategori/create', 'KategoriController@store');
    Route::get('/admin/kategori/{kategori}/delete', 'KategoriController@destroy');
    Route::get('/admin/kendaraan', 'KendaraanController@index');
    Route::post('/admin/kendaraan/create', 'KendaraanController@store');
    Route::get('/admin/kendaraan/{kendaraan}/delete', 'KendaraanController@destroy');
    Route::get('/admin/jenis', 'AdminController@jenis');
    Route::get('/admin/rules', 'AdminController@rules');
    Route::get('/admin/rental', 'AdminController@rental');
});

