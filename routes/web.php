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

    //testing route with parameters
/*
Route::get ('test/{try?}', function($try = null) {
    if ($try == null) {
        return ' test';
    }
    return 'testing page! '. $try;
});
*/

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');
