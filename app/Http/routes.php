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

Route::get('/','FrontendController@index');

Route::get('/admin','AdminController@index');
Route::get('/admin/objectives/add','AdminController@createObjective');
Route::post('/admin/objectives/add','AdminController@add_objectives');
