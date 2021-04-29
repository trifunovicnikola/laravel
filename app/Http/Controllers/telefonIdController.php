<?php

namespace App\Http\Controllers;
use App\Models\photo;
use App\Models\telefon;
//use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use App\Models\Post;

class telefonIdController
{
    public function show($id)
    {

       $telefon= telefon::with('mark_id', 'specifikacije')->where('id',$id)->get();

        for($i=0; $i<sizeof($telefon);$i++){
            $telefon[$i]->slika = photo::where('telefon_id', $telefon[$i]->id)->get();
        }
        return $telefon;



    }

    public function obrisi($id)
    {
        DB::select('delete from photos where telefon_id ='.$id );
        DB::select('delete from telefons where id ='.$id );

    }

    public function filtriraj($mark_id)
    {
        $javno= 1 ;
      $telefon= telefon::with('mark_id', 'specifikacije' )->where('mark_id',$mark_id )->where('javno',$javno)->get();

        for($i=0; $i<sizeof($telefon);$i++){
            $telefon[$i]->slika = photo::where('telefon_id', $telefon[$i]->id)->first();
        }
        return $telefon;
    }
    public  function uzmiSveTelefone()
    {
        return telefon::all();
    }

    public function dajTelefone()
    {

return DB::select('select tel.id as id, tel.model as model, marks.marka_naziv as naziv, tel.cijena as cijena , photos.slika as slika ,tel.prodavac as prodavac ,tel.kontakt as kontakt
FROM telefons as tel
join marks on (marks.id = tel.mark_id)
join photos on (photos.telefon_id = tel.id)
where tel.javno = 1
group by photos.telefon_id');
    }




    public function dajnovitelefon()
    {

        $javno= 0 ;
        $telefon = telefon::with('mark_id','specifikacije' )->where('javno',$javno)->get();

        for($i=0; $i<sizeof($telefon);$i++){
            $telefon[$i]->slika = photo::where('telefon_id', $telefon[$i]->id)->first();
        }
        return $telefon;

    }
    public function model($naziv_modela)
    {
        $javno= 1 ;
        $telefon =  telefon::with('mark_id','specifikacije' )->where('model',$naziv_modela)->where('javno',$javno)->get();
        for($i=0; $i<sizeof($telefon);$i++){
            $telefon[$i]->slika = photo::where('telefon_id', $telefon[$i]->id)->first();
        }
        return $telefon;
    }

    public function pretraziCijena(Request $request)
        {
//        $telefon=$telefon->newQuery();
//
//        if($req->has('mark_id'))
//        {
//            $telefon->where('mark_id', $req->input('mark_id'));
//        }
//        if($req->has('model'))
//        {
//            $telefon->where('model', $req->input('model'));
//        }
//        if($req->has('cijena'))
//        {
//            $telefon->where('cijena', $req->input('cijena'));
//        }
//
//        return $telefon;
        $cijena1 = $request->cijena1;
        $cijena2 = $request->cijena2;

        $javno= 1 ;
        $telefon= telefon::with('mark_id', 'specifikacije' )->whereBetween('cijena', [$cijena1, $cijena2])->where('javno',$javno)->get();

        for($i=0; $i<sizeof($telefon);$i++){
            $telefon[$i]->slika = photo::where('telefon_id', $telefon[$i]->id)->first();
        }
        return $telefon;

    }



}
