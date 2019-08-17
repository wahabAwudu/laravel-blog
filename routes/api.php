<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Blog Endpoints
Route::get('posts', 'BlogController@index');
Route::get('posts/{id}', 'BlogController@show');
Route::post('posts', 'BlogController@store');
Route::put('posts/{id}', 'BlogController@update');
Route::patch('posts/{id}', 'BlogController@update');
Route::delete('posts/{id}', 'BlogController@destroy');

// Todo Endpoints
Route::get('todos', 'TodosController@index');
Route::get('todos/{id}', 'TodosController@show');
Route::post('todos', 'TodosController@store');
Route::put('todos/{id}', 'TodosController@update');
Route::patch('todos/{id}', 'TodosController@update');
Route::delete('todos/{id}', 'TodosController@destroy');
