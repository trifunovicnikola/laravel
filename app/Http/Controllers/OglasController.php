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

        return DB::select('select * from posts');
    }
    public function show1()
    {
//
        return DB::select("select * from posts where posts.javno is NULL ");
    }
    function dodaj(Request  $req)
    {

        $post = new post();
        $post->tekst = $req->tekst;
        $post->save();
        return $post;
    }


    public function obrisi($id)
    {
        DB::select('delete from posts where id='.$id);


    }

    public function edit($id)
    {
        $podatak = post::find($id);
        $podatak->javno = 1;
        $podatak->save();
        return $podatak;
    }

}
