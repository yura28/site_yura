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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', ['uses' => 'HomeControler@index', 'as' => 'home']);
Route::get('/pub', ['uses' => 'HomeControler@pub', 'as' => 'pub']);
Route::get('/osv', ['uses' => 'HomeControler@osv', 'as' => 'osv']);
Route::get('/avt', ['uses' => 'HomeControler@avt', 'as' => 'avt']);
Route::get('/bio', ['uses' => 'HomeControler@bio', 'as' => 'bio']);
Route::get('/dani', ['uses' => 'HomeControler@dani', 'as' => 'dani']);
Route::get('/dosv', ['uses' => 'HomeControler@dosv', 'as' => 'dosv']);
Route::get('/cont', ['uses' => 'HomeControler@cont', 'as' => 'cont']);

