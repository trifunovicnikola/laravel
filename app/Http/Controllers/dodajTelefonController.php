<?php

namespace App\Http\Controllers;

use App\Models\configuration;
use App\Models\telefon;
use Illuminate\Http\Request;
use  App\Models\models;

class dodajTelefonController extends Controller
{
    function dodaj(Request $req)
    {
        $configuration = new configuration();
        $configuration->procesor = $req->procesor;
        $configuration->ram = $req->ram;
        $configuration->baterija = $req->baterija;
        $configuration->kamera_zadnja= $req->kamera_zadnja;
        $configuration->kamera_prednja = $req->kamera_prednja;
        $configuration->ekran = $req->ekran;
        $configuration->memorija = $req->memorija;
        $configuration->save();

        $telefon = new telefon();
        $telefon->mark_id = $req->mark_id;
        $telefon->model = $req->model;
        $telefon->cijena = $req->cijena;
        $telefon->opis = $req->opis;
        $telefon->slika_id = $configuration->id;
//        $telefon->datum_objave = $req->datum_objave;
//        $telefon->datum_isteka = $req->datum_isteka;
        $telefon->specifikacije = $req->specifikacije;
        $telefon->prodavac = $req->prodavac;
        $telefon->kontakt = $req->kontakt;
        $telefon->javno = $req->javno;
        $telefon->sifra = $req->sifra;
        $telefon->save();


        return $telefon;

    }
}
