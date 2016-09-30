<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('api', 'ApiController@index');
Route::get('api/{id}', 'ApiController@show');
Route::post('api/create', 'ApiController@create');
Route::match(['put', 'patch'], 'api/{id}', 'ApiController@edit');
Route::match(['put', 'patch'], 'api/{id}/status', 'ApiController@status');
Route::delete('api/{id}', 'ApiController@destroy');