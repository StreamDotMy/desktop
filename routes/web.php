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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');


Route::get('/play/{id}', 'HomeController@play')->name('play');
Route::get('/signup',    'HomeController@signup')->name('signup');



Route::get('/video', function () {
    return view('video');
});
