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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kirimemail', 'HomeController@kirimemail')->name('kirimemail');

Route::get('/contohemail', function () {
    return new App\Mail\belajarlaravelEmail();
});

Route::get('/dosen', 'DosenController@index');

Route::get('/pegawai', 'PegawaiController@index');
Route::match(['get', 'post'], '/pegawai/tambah', 'PegawaiController@tambah');
Route::match(['get', 'post'], '/pegawai/edit/{id?}', 'PegawaiController@edit');

Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/formulir', 'PegawaiController@formulir');
Route::post('pegawai/proses', 'PegawaiController@proses');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

Route::get('/barang', 'BarangController@index');
Route::match(['get', 'post'], '/barang/tambah', 'BarangController@tambah');
Route::match(['get', 'post'], '/barang/edit/{id?}', 'BarangController@edit');
Route::post('/barang/hapus', 'BarangController@hapus');
Route::get('/barang/trash', 'BarangController@trash');
Route::get('/barang/restore/{id}', 'BarangController@restore');
Route::post('/barang/forcedelete', 'BarangController@forcedelete');

Route::get('/article', 'ArticleController@index');

Route::get('/checkaction', 'ArticleController@checkAction');

Route::get('/listaction', function(){
    $controllers = [];

    foreach (Route::getRoutes()->getRoutes() as $route)
    {
        $action = $route->getAction();

        if (array_key_exists('controller', $action))
        {
            // You can also use explode('@', $action['controller']); here
            // to separate the class name from the method
            $controllers[] = $action['controller'];
        }
    }

    return "<pre>". print_r($controllers, true) ."</pre>";
});
