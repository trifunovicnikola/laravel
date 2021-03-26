<?php

namespace App\Http\Controllers;

use App\Models\telefon;
use Illuminate\Http\Request;
use  App\Models\models;

class dodajTelefonController extends Controller
{
    function dodaj(Request $req)
    {
        $telefon = new telefon();
        $telefon->mark_id = $req->mark_id;
        $telefon->cijena = $req->cijena;
        $telefon->opis = $req->opis;
        $telefon->slika1 = $req->slika1;
        $telefon->slika2 = $req->slika2;
        $telefon->slika3 = $req->slika3;
//        $telefon->datum_objave = $req->datum_objave;
//        $telefon->datum_isteka = $req->datum_isteka;
        $telefon->konfiguracije = $req->konfiguracije;
        $telefon->prodavac = $req->prodavac;
        $telefon->kontakt = $req->kontakt;
        $telefon->javno = $req->javno;
        $telefon->save();
        return $telefon;

    }
}
