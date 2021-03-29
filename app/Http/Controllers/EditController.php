<?php

namespace App\Http\Controllers;

use App\Models\telefon;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit($id )
    {
        $podatak = telefon::find($id);
//        $podatak->mark_id = $req->mark_id;
//        $podatak->cijena = $req->cijena;
//        $podatak->opis = $req->opis;
//        $podatak->slika1 = $req->slika1;
//        $podatak->slika2 = $req->slika2;
//        $podatak->slika3 = $req->slika3;
//        $podatak->datum_objave = $req->datum_objave;
//        $podatak->datum_isteka = $req->datum_isteka;
//        $podatak->konfiguracije = $req->konfiguracije;
//        $podatak->prodavac = $req->prodavac;
//        $podatak->kontakt = $req->kontakt;
        $podatak->javno = 1;
        $podatak->save();
        return redirect('/api/telefoni/'.$id);


    }
}
