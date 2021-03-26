<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use  App\Models\models;
use  App\Models\mark;
class dodajModelController extends Controller
{
    function dodaj(Request  $req)
    {

        $models = new models();
        $models->model_naziv = $req->model_naziv;
        $models->marka_id = $req->marka_id;
        $models->save();
        return redirect('api/dodaj-model');
    }
}
