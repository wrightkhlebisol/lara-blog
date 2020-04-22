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

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/create', 'ArticlesController@create');

Route::post('/articles', 'ArticlesController@store');

Route::get('/articles/{article}/edit', 'ArticlesController@edit');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/homepage', function () {
    return view('index');
});

Route::get('/about', function () {
    $articles = App\Article::take(3)->latest()->get();

    return view('about', ['articles' => $articles]);
});
