<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/ourtestimoni', function () {
    return view('5026221147');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/responsive1', function () {
    return view('responsive1');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/style2', function () {
    return view('style2');
});

Route::get('/tugas1', function () {
    return view('tugas1');
});

Route::get('error', function () {
    return "<h1>Server Error : Ada kesalahan di server</h1>";
});


Route::get('/blog','App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');

Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');

Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

//snack root

Route::get('/snack','App\Http\Controllers\SnackDBController@index1');

Route::get('/snack/tambah','App\Http\Controllers\SnackDBController@tambah1');

Route::post('/snack/store','App\Http\Controllers\SnackDBController@store1');

Route::get('/snack/edit/{id}','App\Http\Controllers\SnackDBController@edit1');

Route::post('/snack/update','App\Http\Controllers\SnackDBController@update1');

Route::get('/snack/hapus/{id}','App\Http\Controllers\SnackDBController@hapus1');

Route::get('/snack/cari1','App\Http\Controllers\SnackDBController@cari1');

Route::get('/','App\Http\Controllers\pagenotionController@index2');

Route::get('/uas','App\Http\Controllers\uascontroller@indexuas');

Route::get('/uas/tambah','App\Http\Controllers\uascontroller@tambahuas');

Route::post('/uas/store','App\Http\Controllers\uascontroller@storeuas');
