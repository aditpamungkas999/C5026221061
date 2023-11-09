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
    return view('index');
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