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

Route::get('/test/{post}', function ($post) {
    // return ['name' => $name];
    $posts = [
        'my-first-post' => 'Hello, this is my first blog posts',
        'my-second-post' => 'Now I am geeting the hang of this blogging thing'
    ];

    return view('test', ['name' => $posts]);
});

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
