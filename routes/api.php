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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// List of routes for task-list app (user and task)

Route::post('login', 'UsersController@login');

Route::post('users','UsersController@store');
 
Route::post('tasks','TasksController@store');
 
Route::put('tasks/{id}','TasksController@update');
 
Route::delete('tasks/{id}', 'TasksController@delete');
