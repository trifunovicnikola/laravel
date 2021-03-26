<?php

namespace App\Http\Controllers;

use App\Models\telefon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OglasController extends Controller
{
    public function show()
    {
//
        //return DB::select('select * from telefons ');
        return DB::select('select * from posts');
    }
}
