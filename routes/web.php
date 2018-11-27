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


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/setCState', 'CompetenciasController@setCState')->name('setCState');

Route::get('/mapaDeEstudios/{id}', 'HomeController@mapaDeEstudios')->name('mapaDeEstudios');
Route::get('/competencia/{CARRERA}/{COMPETENCIA}', 'CompetenciasController@showCompetencia')->name('competencia');
Route::get('/materia/{CARRERA}/{CLAVE}', 'CompetenciasController@showMateria')->name('materia');

Route::get('/', 'HomeController@dashboard')->name('dashboard');

Route::post('/chat/addMessage', 'ChatController@addMessage')->name('chatMessage');
Route::get('/chat/remove/{id}', 'ChatController@remove')->name('remove');




