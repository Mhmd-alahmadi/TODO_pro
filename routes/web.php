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
Route::get('userTask/{user_id}','Relation\RelationsController@getTask') -> name ('doctor.services');

Route::post('delete','Relation\RelationsController@delete')->name('task.delete');
