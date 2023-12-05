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
    return view('indexutama');
});
Route::get('Hallo', function () {
    //Bisa disi program apa saja
    return "Hallo Apa Kabar";

});
Route::get('Hallo2', function () {
    return "<h1>Hallo Apa Kabar</h1>" ;

});

Route::get('blog', function () {
	return view('blog');
});

Route::get('Materi 1', function () {
	return view('Materi 1');
});
Route::get('Materi 2', function () {
	return view('Materi 2');
});
Route::get('Materi 3', function () {
	return view('Materi 3');
});
Route::get('Materi 4', function () {
	return view('Materi 4');
});
Route::get('Materi 5', function () {
	return view('Materi 5');
});
Route::get('Materi 6', function () {
	return view('Materi 6');
});
Route::get('Materi 7', function () {
	return view('Materi 7');
});
Route::get('Tugas 1', function () {
	return view('Tugas 1');
});
Route::get('Tugas 2', function () {
	return view('Tugas 2');
});
Route::get('Tugas 3', function () {
	return view('Tugas 3');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
	return view('home');
});

Route::get('/blog/tentang', function () {
	return view('tentang');
});
Route::get('/blog/kontak', function () {
	return view('kontak');
});

//route CRUD

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
