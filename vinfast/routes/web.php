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

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/gioi-thieu-vinfast-quang-ngai','App\Http\Controllers\HomeController@about');
Route::get('/xe-vinfast','App\Http\Controllers\HomeController@car');
Route::get('/tra-gop','App\Http\Controllers\HomeController@installment');
Route::get('lien-he-vinfast-quang-ngai','App\Http\Controllers\HomeController@contact');
Route::get('admin','App\Http\Controllers\AdminController@login');
Route::post('savelogin','App\Http\Controllers\AdminController@savelogin');
Route::post('saveuser','App\Http\Controllers\UserController@save');
// Admin
Route::prefix('administrator')->middleware('login')->group(function () {
	Route::get('/','App\Http\Controllers\AdminController@dashboard');
	Route::get('/user','App\Http\Controllers\UserController@user');
	Route::get('edituser/{id}','App\Http\Controllers\UserController@edituser');
	// typecar
	Route::get('alltypecar','App\Http\Controllers\TypecarController@all');
	Route::get('addtypecar','App\Http\Controllers\TypecarController@add');
	Route::post('savetypecar','App\Http\Controllers\TypecarController@save');
	Route::get('edittypecar/{id}','App\Http\Controllers\TypecarController@edit');
	Route::get('deletetypecar/{id}','App\Http\Controllers\TypecarController@delete');
	Route::post('update/{id}', 'App\Http\Controllers\TypecarController@update');
	// car
	Route::get('allcar','App\Http\Controllers\CarController@all');
	Route::get('addcar','App\Http\Controllers\CarController@add');
	Route::post('savecar','App\Http\Controllers\CarController@save');
	Route::get('deletecar/{id} ','App\Http\Controllers\CarController@delete');
	Route::get('editcar/{id}','App\Http\Controllers\CarController@edit');
	Route::post('updatecar/{id}','App\Http\Controllers\CarController@update');
});
Route::get('/{slug}','App\Http\Controllers\HomeController@detailcar'); //lỗi