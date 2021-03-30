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
        $telefon->slika_id = $req->slika_id;
//        $telefon->datum_objave = $req->datum_objave;
//        $telefon->datum_isteka = $req->datum_isteka;
        $telefon->model = $req->model;
        $telefon->konfiguracije = $req->konfiguracije;
        $telefon->prodavac = $req->prodavac;
        $telefon->kontakt = $req->kontakt;
        $telefon->sifra = $req->sifra;
        $telefon->javno = $req->javno;
        $telefon->save();
        return $telefon;

    }
}
