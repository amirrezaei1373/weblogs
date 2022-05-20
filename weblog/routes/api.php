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

Route::get('post', 'PostController@post');
Route::get('post/{id}', 'PostController@postById');
Route::post('post', 'PostController@postSave');
Route::put('post/{id}', 'PostController@postUpdate');
Route::delete('post/{id}', 'PostController@postDelete');
Route::get('post/search/{q}', 'PostController@postSearch');

// Route::apiResponse('post', 'post1');
