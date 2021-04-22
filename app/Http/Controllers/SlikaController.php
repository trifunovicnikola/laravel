<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlikaController extends Controller
{
    public function show()
    {
        return photo::all();
    }
    public function dajSliku($telefon_id)
    {
//        return photo::find($telefon_id);
        return DB::select('SELECT * FROM PHOTOS WHERE telefon_id='.$telefon_id);
    }
}
