<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\mark;

class dodajMarkuController extends Controller
{

    function dodaj(Request  $req)
    {

        $mark = new mark();
        $mark->marka_naziv = $req->ime;
        $mark->model_id = $req->model_naziv;
        $mark->save();
        return redirect('api/dodaj-marku');
    }
}
