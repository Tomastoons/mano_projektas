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
/*
Route::get('/about', function () {
    return view('pages/about'); //or pages.about
});*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', 'PagesController@about');

Route::get('/hello', 'PagesController@hello');

Route::get('/users/{id}', function ($id) {
    return 'Hello,'.$id;
});
Route::get('/', 'PagesController@index');
Route::resource('group', 'GroupsController');
Route::resource('posts', 'PostsController');