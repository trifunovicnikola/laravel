<?php

namespace App\Http\Controllers;

use App\Models\mark;
use App\Models\models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class markeController extends Controller
{
    public function show()
    {
        return mark::all();
    }

    public function filtriraj($id)
    {
        return mark::find($id);
    }
    function dodaj(Request  $req)
    {

        $mark = new mark();
        $mark->marka_naziv = $req->ime;
        $mark->model_id = $req->model_naziv;
        $mark->save();
        return $mark;
    }

}
