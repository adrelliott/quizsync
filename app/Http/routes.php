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

/**
 * All App Routes (logged in users only)
 */

## Quizzes
Route::get('app/quizzes', ['as' => 'quizzes.index', 'uses' => 'QuizzesController@index']);
Route::get('app/quizzes/create', ['as' => 'quizzes.create', 'uses' => 'QuizzesController@create']); 
Route::get('app/quizzes/{quiz}', ['as' => 'quizzes.show', 'uses' => 'QuizzesController@show']); 
Route::get('app/quizzes/{quiz}/edit', ['as' => 'quizzes.edit', 'uses' => 'QuizzesController@edit']); 
Route::post('app/quizzes', ['as' => 'quizzes.store', 'uses' => 'QuizzesController@store']);
Route::put('app/quizzes/{quiz}', ['as' => 'quizzes.update', 'uses' => 'QuizzesController@update']);
Route::delete('app/quizzes/{quiz}', ['as' => 'quizzes.destroy', 'uses' => 'QuizzesController@destroy']);

## Sections
Route::get('app/quizzes/{quiz}/sections/create', ['as' => 'sections.create', 'uses' => 'SectionsController@create']);
Route::get('app/quizzes/{quiz}/sections/{section}/edit', ['as' => 'sections.edit', 'uses' => 'SectionsController@edit']);
Route::post('app/quizzes/{quiz}/sections', ['as' => 'sections.store', 'uses' => 'SectionsController@store']);
Route::put('app/sections/{section}', ['as' => 'sections.update', 'uses' => 'SectionsController@update']);
Route::delete('app/sections/{section}', ['as' => 'sections.destroy', 'uses' => 'SectionsController@destroy']);


## Questions
Route::get('app/quizzes/{quiz}/questions/create', ['as' => 'questions.create', 'uses' => 'QuestionsController@create']);
Route::get('app/quizzes/{quiz}/questions/{question}/edit', ['as' => 'questions.edit', 'uses' => 'QuestionsController@edit']);
Route::post('app/quizzes/{quiz}/questions', ['as' => 'questions.store', 'uses' => 'QuestionsController@store']);
Route::put('app/questions/{question}', ['as' => 'questions.update', 'uses' => 'QuestionsController@update']);
Route::delete('app/questions/{question}', ['as' => 'questions.destroy', 'uses' => 'QuestionsController@destroy']);

// Route::post('app/quizzes/{quiz}/questions', ['as' => 'questions.store', 'uses' => 'QuestionsController@store']);
// Route::put('app/questions/{question}', ['as' => 'questions.update', 'uses' => 'QuestionsController@update']);

## Answers (applies to Multichoice and Diagnostic only)
Route::get('app/questions/{question}/answers/create', ['as' => 'answers.create', 'uses' => 'AnswersController@create']);
Route::get('app/questions/{question}/answers/edit', ['as' => 'answers.edit', 'uses' => 'AnswersController@edit']);
// (Note the deviation from RESTful endpoints in the above route - we're actually editing multiple answers here. 
// So the following route 'syncs' all answers on the question model 
Route::post('app/questions/{question}/answers/multiple', ['as' => 'answers.store.multiple', 'uses' => 'AnswersController@storeMultiple']);




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
