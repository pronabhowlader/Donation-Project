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

//home route
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});

//authentication route
Auth::routes();

//Donor Controller Route
Route::get('/donor', 'DonorController@index');
Route::get('/donor/{id}', 'DonorController@show');
Route::get('/donor/{id}/edit', 'DonorController@edit');
Route::post('/donor/{donor} ', 'DonorController@update');

