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

Route::get('test/{poster}', 'PostsController@show');

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return [
        'name' => 'value',
        'multi' => [
            'another'
        ]
    ];
});

Route::get('/homepage', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
