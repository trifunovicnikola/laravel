<?php

namespace App\Http\Controllers;

use App\Models\configuration;
use App\Models\photo;
use App\Models\telefon;
use Illuminate\Http\Request;
use  App\Models\models;

class dodajTelefonController extends Controller
{
    function dodaj(Request $req)
    {
//        $configuration = new configuration();
//        $configuration->procesor = $req->procesor;
//        $configuration->ram = $req->ram;
//        $configuration->baterija = $req->baterija;
//        $configuration->kamera_zadnja= $req->kamera_zadnja;
//        $configuration->kamera_prednja = $req->kamera_prednja;
//        $configuration->ekran = $req->ekran;
//        $configuration->memorija = $req->memorija;
//        $configuration->save();

        $telefon = new telefon();
        $telefon->mark_id = $req->mark_id;
        $telefon->model = $req->model;
        $telefon->cijena = $req->cijena;
        $telefon->opis = $req->opis;
        $telefon->stanje = $req->stanje;
        $telefon->specifikacije = $req->specifikacije;
        $telefon->prodavac = $req->prodavac;
        $telefon->kontakt = $req->kontakt;
        $telefon->javno = $req->javno;
        $telefon->sifra = $req->sifra;
        $telefon->save();


//        $photo = new photo;
//        if ($req->hasFile('slika')) {
//            $completeFileName = $req->file('slika')->getClientOriginalName();
//            $filenameonly = pathinfo($completeFileName, PATHINFO_FILENAME);
//            $extension = $req->file('slika')->getClientOriginalExtension();
//            $compPic = str_replace(' ', '_', $filenameonly) . '_' . rand() . '_' . time() . '.' .
//                $extension;
//            $path = $req->file('slika')->storeAs('public/slike', $compPic);
//            $photo->slika = $compPic;
//            $photo->telefon_id = $telefon->id;
//            $photo->save();
//        }

        return $telefon;

    }
}
