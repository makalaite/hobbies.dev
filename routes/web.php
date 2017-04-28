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

Route::group (['prefix' => 'cities'], function (){

    Route::get('/', ['uses' => 'PLCitiesController@index']);

    Route::get('/create', ['as' => 'app.cities.create', 'uses' => 'PLCitiesController@create']);
    Route::post('/create', ['uses' => 'PLCitiesController@store']);
});

Route::get('/hobbies', ['as' => 'app.hobbies', 'uses' => 'PLHobbiesController@index']);
Route::get('/hobbies/create', ['as' => 'app.hobbies.create', 'uses' => 'PLHobbiesController@create']);
Route::post('/hobbies/create', ['uses' => 'PLHobbiesController@store']);

Route::get('persons', ['as' => 'app.persons'])