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

Route::get('/', function () {
    return [
        'name' => 'value',
        'multi' => [
            'another'
        ]
    ];
});

Route::get('/fetchtest', function () {
    return 'Name';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
