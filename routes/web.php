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

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');
