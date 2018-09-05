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

Route::get('/', 'FrontController@index');
Route::get('/show/{id}', 'FrontController@show');

Route::group(['prefix'=>'selling','middleware'=>'auth'], function()
{
Route::get('/show/', 'SellingController@show');
Route::post('/find/', 'SellingController@myShow');
Route::get('/create/', 'SellingController@create');
Route::post('/edit/', 'SellingController@edit');
Route::post('/update/{id}', 'SellingController@update');
Route::post('/store', 'SellingController@store');
Route::post('/delete/', 'SellingController@delete');
});

Route::group(['prefix'=>'repair','middleware'=>'auth'], function()
{
Route::get('/show/', 'RepairController@show');
Route::post('/find/', 'RepairController@myShow');
Route::get('/create/', 'RepairController@create');
Route::post('/edit/', 'RepairController@edit');
Route::post('/update/{id}', 'RepairController@update');
Route::post('/store', 'RepairController@store');
Route::post('/delete/', 'RepairController@delete');
Route::post('/check/', 'RepairController@check');
});

Route::resource('/reports', 'ReportsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
