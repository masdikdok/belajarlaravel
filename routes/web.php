<?php

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

Route::get('home', function () {
    return "Halo, selamat datang di website pembelajaran laravel!";
});

Route::get('dosen', 'DosenController@index');

Route::get('pegawai', 'PegawaiController@index');
Route::match(['get', 'post'], 'pegawai/tambah', 'PegawaiController@tambah');

Route::get('pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('pegawai/edit', 'PegawaiController@edit');

Route::get('pegawai/hapus/{id}', 'PegawaiController@hapus');

Route::get('pegawai/formulir', 'PegawaiController@formulir');
Route::post('pegawai/proses', 'PegawaiController@proses');

Route::get('blog', 'BlogController@index');
Route::get('blog/tentang', 'BlogController@tentang');
Route::get('blog/kontak', 'BlogController@kontak');
