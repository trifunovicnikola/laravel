<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('telefoni', 'telefonIdController@dajTelefone');
Route::get('sviTelefoni', 'telefonIdController@uzmiSveTelefone');

Route::get('/users',function()
{
    return view('test');
} );

Route::get('telefoni/{id}', 'telefonIdController@show');

Route::get('marke', 'markeController@show');

Route::get('model', 'modelController@show');
Route::get('model/{marka_id}', 'modelController@modelmarka');

Route::post('dodaj-marku', 'markaController@dodaj');

Route::post('dodaj-model', 'modelController@dodaj');

Route::post('dodaj-telefon', 'telefonIdController@dodaj');

Route::delete('obrisi/{id}', 'telefonIdController@obrisi');

Route::post('edit/{id}', 'telefonIdController@edit');

Route::get('oglas', 'OglasController@show');

Route::post('dodaj-oglas', 'OglasController@dodaj');

Route::delete('obrisi-oglas/{id}', 'OglasController@obrisi');
Route::post('edit-oglas/{id}', 'OglasController@edit');


Route::post('dodaj-konfiguracije', 'DodajKonfiguracijeController@dodaj');

Route::get('konfiguracije', 'DodajKonfiguracijeController@show' );
Route::get('marka-filtriraj/{id}', 'markeController@filtriraj');
Route::get('telefon-filtriraj/{mark_id}', 'telefonIdController@filtriraj');
Route::get('novitelefon', 'telefonIdController@dajnovitelefon');
Route::get('telefon-filtriraj/telefonmodel/{naziv_modela}', 'telefonIdController@model');
Route::get('slike', 'SlikaController@show');
Route::get('slika/{telefon_id}', 'SlikaController@dajSliku');
Route::get('oglasadmin', 'OglasController@show1');
Route::post('filtrirajSve','telefonIdController@filtrirajSve' );

Route::post('mail-salji', 'questionController@send');
Route::get('mail-svi', 'questionController@show');



Route::post('/register','AuthController@register');
Route::post('/login','AuthController@login');

Route::middleware('auth:sanctum')->group(function ()
{
    Route::get('/user','AuthController@user');
    Route::post('/logout', 'AuthController@logout');
});


Route::post('/file','fileController@file');
