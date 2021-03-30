<?php

namespace App\Http\Controllers;
use App\Models\telefon;
use App\Models\mark;
use Illuminate\Support\Facades\DB;



class postsController
{
    public function show()
    {
//
        //return DB::select('select * from telefons ');
        return telefon::with('mark_id', 'slika_id', 'konfiguracije')->get();

    }
}
