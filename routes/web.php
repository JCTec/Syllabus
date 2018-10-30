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


Auth::routes();

Route::get('/crearPlanDeEstudios', 'HomeController@crearPlanDeEstudios')->name('crearPlanDeEstudios');
Route::get('/mapaDeEstudios', 'HomeController@mapaDeEstudios')->name('mapaDeEstudios');

Route::get('/setCState', 'CompetenciasController@setCState')->name('setCState');

Route::get('/', 'HomeController@dashboard')->name('dashboard');



