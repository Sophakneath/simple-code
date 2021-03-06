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

Route::get('/test','PageController@test')->name('test');
Route::get('/welcome','PageController@welcome')->name('welcome');
Route::get('/welcome1','PageController@welcome1')->name('welcome1');
Route::get('/welcome2','PageController@welcome2')->name('welcome2');
Route::get('/hw','PageController@hw')->name('hw');
Route::get('/myhobby','PageController@myhobby')->name('myhobby');
Route::get('/aboutme','PageController@aboutme')->name('aboutme');
Route::get('/contactme','PageController@contactme')->name('contactme');
