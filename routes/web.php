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
    return view('dashboard');
});

Route::get('/scl/login', function () {
    return view('scl_data/scl_login');
});

Route::get('/scl/index', function () {
    return view('scl_data/index');
});

Route::post('/scllogin/submit', 'SclloginController@submit' );
