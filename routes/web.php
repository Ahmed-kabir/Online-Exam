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


Route::get('/','WelcomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//question controller
Route::get('/question/add','QuestionController@add_question');
Route::post('/store/question','QuestionController@store_question');
Route::get('/question/manage','QuestionController@manage_question');
Route::get('/edit/question/{id}','QuestionController@edit_question');
Route::post('/update/question','QuestionController@update_question');
Route::get('/delete/question/{id}','QuestionController@delete_question');
//categoray controller
Route::get('/category/add','CategoryController@add_category');
Route::post('/store/category','CategoryController@store_category');
Route::get('/category/manage','CategoryController@manage_category');
Route::get('/edit/category/{id}','CategoryController@edit_category');
Route::post('/update/category','CategoryController@update_category');
Route::get('/delete/category/{id}','CategoryController@delete_category');