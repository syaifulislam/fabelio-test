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

Route::get('/submit', function () {
    return view('SubmitPage');
});

Route::get('/view-list', 'SubmitController@show');

Route::get('/detail/{id}','DetailController@show');

Route::post('/submit','SubmitController@create');
Route::post('/comment/{id}','DetailController@comment');
