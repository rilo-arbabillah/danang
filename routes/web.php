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

Route::get('/', 'tembisController@dash');
Route::get('dashboard', 'tembisController@dash');
Route::get('/dashboard/tambah', 'tembisController@tambah');
Route::post('/dashboard/store', 'tembisController@store');

Route::get('/history', 'tembisController@history');

Route::get('/report', 'tembisController@report');

Route::get('/user', 'tembisController@dtuser');

/*Route::get('/history', function () {
    return view('history');
});

Route::get('/report', function () {
    return view('report');
});*/

Route::get('/approve', function () {
    return view('approve');
});




