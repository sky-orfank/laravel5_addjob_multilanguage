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

//Route::get('/', function () {
//    return view('welcome');
//});

get('/', ['as' => 'jobs', 'uses' => 'JobController@index']);
get('/create', ['as' => 'job.create', 'uses' => 'JobController@create']);
post('/store', ['as' => 'job.store', 'uses' => 'JobController@store']);
get('/lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

