<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('ingreso', 'App\Http\Controllers\AlumnosController@ingreso')->name('ingreso');
Route::post('ingreso', 'App\Http\Controllers\AlumnosController@store')->name('ingreso.store');
Route::get('listado', 'App\Http\Controllers\AlumnosController@index')->name('listado.index');
Route::get('listado/{id_alumno}', 'App\Http\Controllers\AlumnosController@show')->name('listado.show');

Route::view('welcome', 'welcome')->name('welcome');