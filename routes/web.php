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
Route::get('/dynamic_dependent', 'DynamicDependent@index')->name('soal3');

Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');

Route::resource('country', 'Country');
Route::resource('province', 'Province');
Route::resource('city', 'City');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soal1', function () {
    return view('soal1/index');
})->name('soal1');

Route::get('/soal2', function () {
    return view('soal2/index');
})->name('soal2');

