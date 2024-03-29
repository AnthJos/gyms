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

Route::get('/', function () {
    return view('welcome');
});
/** routes client */
Route::get('/client/iniciar-sesion', function () {
    return view('cliente/login');
});
/** routes admin */
Route::get('/admin/iniciar-sesion', function () {
    return view('admin/login');
});
Route::get('/admin/panel/inicio', function () {
    return view('admin/inicio');
});
