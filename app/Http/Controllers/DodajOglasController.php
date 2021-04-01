<?php

namespace App\Http\Controllers;

use App\Models\models;
use App\Models\post;
use Illuminate\Http\Request;

class DodajOglasController extends Controller
{
    function dodaj(Request  $req)
    {

        $post = new post();
        $post->tekst = $req->tekst;
//        $post->datum_objave= $req->datum;
        $post->save();
        return post;
    }
}
