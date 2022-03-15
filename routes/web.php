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
    return 5555;
});

Route::get('hello', function(){
    return view('services');
    // return "Hi Ahmed";
});


Route::get('hi/{name}', 'ServicesController@displayName');
Route::get('service/{id}', 'ServicesController@displayService');

Route::get('check', 'ServicesController@check');

Route::get('contest/{name}/{num_problems}/{level}', 'ContestController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
