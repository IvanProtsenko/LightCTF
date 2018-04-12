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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'TasksController@index');
Route::get('/scoreboard', 'HomeController@score')->name('home');
Route::get('/scoreboard', 'UsersController@index');
Route::get('/add/{id}', 'UsersController@add')->name('home');

