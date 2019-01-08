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

Route::get('/', 'pagecontroller@index');
Route::get('/services', 'pagecontroller@services');
Route::get('/about', 'pagecontroller@about');

Route::resource('posts','postcontroller');

Auth::routes();

Route::get('/dashboard', 'dashboardcontroller@index');
