<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('/register','AuthController@register');
Route::post('/login','AuthController@login');

Route::middleware('auth:sanctum')->group(function ()
{
    Route::get('/user','AuthController@user');
    Route::post('/logout', 'AuthController@logout');
});


Route::post('/file','fileController@file');
