<?php

use Illuminate\Support\Facades\Route;


/* Route::resource('/registro','RegistroController'); */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/excel', 'HomeController@export2')->name('exportExcel');
Route::get('/excel2', 'HomeController@export2')->name('export2');
Auth::routes(['register' => false]);