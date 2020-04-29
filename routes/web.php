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

Route::get('/articles', 'ArticlesController@index')->name('articles.index');

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@store');

Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');

Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');

Route::post('/articles', 'ArticlesController@store')->name('articles.store');

Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');

Route::put('/articles/{article}', 'ArticlesController@update')->name('articles.update');


Route::get('/', function () {
    return view('index');
})->name('articles.home');

Route::get('/about', function () {
    $articles = App\Article::take(3)->latest()->get();

    return view('about', ['articles' => $articles]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
