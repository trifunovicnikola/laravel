<?php

namespace App\Http\Controllers;

use App\Models\models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class modelController extends Controller
{
    public function show()
    {

//        return DB::select('select * from models');
//        return models::with('marka')->get();
        return models::all();

    }

    public function  modelmarka($marka_id){

     return   DB::select('select * from models where marka_id ='.$marka_id);

    }
    function dodaj(Request  $req)
    {

        $models = new models();
        $models->model_naziv = $req->model_naziv;
        $models->marka_id = $req->marka_id;
        $models->save();
        return $models;
    }


}
