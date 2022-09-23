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
Route::get('/soal4', 'NutaposController@soal_4_view');
Route::post('/soal4', 'NutaposController@soal_4')->name('soal-4');
Route::get('/soal5', 'NutaposController@soal_5_view');
Route::post('/soal5', 'NutaposController@soal_5')->name('soal-5');
Route::get('/soal6', 'NutaposController@soal_6_view');
Route::post('/soal6', 'NutaposController@soal_6')->name('soal-6');
