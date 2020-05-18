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
    return view('covid');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/artikel', 'ArtikelController@index')->name('artikel');
Route::get('/artikel/buat', 'ArtikelController@buat_artikel');
Route::post('/artikel/buat/proses', 'ArtikelController@buat_proses');

Route::get('/artikel/lihat', 'ArtikelController@showAll');
Route::get('/artikel/lihat/detail/{id_artikel}/u/{id_author}', 'ArtikelController@detail_artikel');

Route::get('/artikel/ubah/{id_author}', 'ArtikelController@ubah_list');
Route::get('/artikel/ubah/{id_author}/a/{id_artikel}/form', 'ArtikelController@ubah_form');
Route::post('/artikel/ubah/proses', 'ArtikelController@ubah_proses');

Route::get('/artikel/hapus/{id_user}/a/{id_artikel}', 'ArtikelController@hapus');

Route::get('/laporkan/{id_artikel}/a/{id_author}', 'LaporanController@lapor');
Route::get('/laporan/','LaporanController@showAllLaporan');

Route::get('/banned/l/{id_laporan}/this-a/{id_artikel}/admin/{id_admin}','LaporanController@banned');
