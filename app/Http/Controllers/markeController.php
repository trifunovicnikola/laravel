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

//          return DB::select('select * from marks');
       // return mark::all();
        return mark::all();

    }

}
