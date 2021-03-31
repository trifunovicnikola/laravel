<?php

namespace App\Http\Controllers;

use App\Models\configuration;
use App\Models\telefon;
use Illuminate\Http\Request;

class DodajKonfiguracijeController extends Controller
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

        return $configuration;

    }

    public function show()
    {
        return configuration::all();
    }
}
