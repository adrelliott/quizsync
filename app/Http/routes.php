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
Route::get('app/quizzes', ['as' => 'quizzes.index', 'uses' => 'QuizzesController@index']);
Route::get('app/quizzes/create', ['as' => 'quizzes.create', 'uses' => 'QuizzesController@create']); 
Route::get('app/quizzes/{quiz}', ['as' => 'quizzes.show', 'uses' => 'QuizzesController@show']); 
Route::get('app/quizzes/{quiz}/edit', ['as' => 'quizzes.edit', 'uses' => 'QuizzesController@edit']); 
Route::post('app/quizzes', ['as' => 'quizzes.store', 'uses' => 'QuizzesController@store']);
Route::put('app/quizzes/{quizzes}', ['as' => 'quizzes.update', 'uses' => 'QuizzesController@update']);
Route::delete('app/quizzes/{quizzes}', ['as' => 'quizzes.destroy', 'uses' => 'QuizzesController@destroy']);




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
