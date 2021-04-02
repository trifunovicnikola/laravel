<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dodajMarkuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $name =  request('ime');

    return view('/test',[
        'name' => $name
    ]);
    // return view('test');
});

Route::get('api/telefoni', 'postsController@show');

Route::get('/users',function()
{
    return view('test');
} );

Route::get('api/telefoni/{id}', 'telefonIdController@show');

Route::get('api/marke', 'markeController@show');

Route::get('api/model', 'modelController@show');

Route::view('api/dodaj-marku', 'dodajMarku');
Route::post('api/dodaj-marku', 'dodajMarkuController@dodaj');

Route::view('api/dodaj-model', 'dodajModel');
Route::post('api/dodaj-model', 'dodajModelController@dodaj');

Route::view('api/dodaj-telefon', 'dodajTelefon');
Route::post('api/dodaj-telefon', 'dodajTelefonController@dodaj');

Route::delete('api/obrisi/{id}', 'telefonIdController@obrisi');

Route::view('api/edit/{id}', 'edit');
Route::post('api/edit/{id}', 'EditController@edit');

Route::get('api/oglas', 'OglasController@show');

Route::view('api/dodaj-oglas', 'dadajOglas');
Route::post('api/dodaj-oglas', 'DodajOglasController@dodaj');

Route::delete('api/obrisi-oglas/{id}', 'OglasController@obrisi');
Route::post('api/edit-oglas/{id}', 'OglasController@edit');

Route::view('api/dodaj-konfiguracije', 'konfiguracije');
Route::post('api/dodaj-konfiguracije', 'DodajKonfiguracijeController@dodaj');

Route::get('api/konfiguracije', 'DodajKonfiguracijeController@show' );
Route::get('api/marka-filtriraj/{id}', 'markeController@filtriraj');
Route::get('api/telefon-filtriraj/{mark_id}', 'telefonIdController@filtriraj');




