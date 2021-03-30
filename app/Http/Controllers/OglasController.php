<?php

namespace App\Http\Controllers;

use App\Models\post;
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

    public function obrisi($id)
    {
        DB::select('delete from posts where id='.$id);
        return post;
    }

    public function edit($id)
    {
        $podatak = post::find($id);
        $podatak->javno = 1;
        $podatak->save();
        return post;
    }

}
