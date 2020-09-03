<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('cars','CarController');



/*
Route::get('/cars','CarController@index');
Route::get('/create-car','CarController@create');
Route::post('/create-car','CarController@store');	
Route::get('/car/{carid}','CarController@show');
*/