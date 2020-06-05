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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', 'AdminController@index');
Route::get('/kategori', 'KategoriController@index');
Route::post('/kategori/create', 'KategoriController@input_kategori');


Route::get('/kendaraan', 'KendaraanController@index');
Route::post('/kendaraan/store', 'KendaraanController@store');

Route::get('/jenis', 'JenisController@index');

Route::get('/rules', 'RulesController@index');

Route::get('/rental', 'RentalController@index');

Route::get('/kategori/{id}/Edit','KategoriController@Edit');
Route::post('/kategori/{id}/Update','KategoriController@Update');
Route::get('/kategori/{id}/delete','KategoriController@delete');
