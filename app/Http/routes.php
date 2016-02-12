<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

## Site Routes (public facing)
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
// Route::get('about', 'PagesController@about');
// Route::get('contact', 'PagesController@contact');

## App Routes (logged in users only)
Route::get('app/quizzes', 'QuizzesController@index');
Route::get('app/quizzes/create', 'QuizzesController@create'); //shows create form
Route::get('app/quizzes/{quizzes}', 'QuizzesController@show'); //shows a quizzes
Route::get('app/quizzes/{quizzes}/edit', 'QuizzesController@edit'); //shows edit form
Route::post('app/quizzes', 'QuizzesController@store');
Route::put('app/quizzes/{quizzes}', 'QuizzesController@update');
Route::delete('app/quizzes/{quizzes}', 'QuizzesController@destroy');




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
