<?php

namespace App\Http\Controllers;
use App\Models\photo;
use App\Models\telefon;
use Illuminate\Support\Facades\DB;

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
        DB::select('delete from telefons where id ='.$id);
        return redirect('/api/telefoni');
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

    public function dajTelefone()
    {

        $javno= 1 ;
        $telefon = telefon::with('mark_id','specifikacije' )->where('javno',$javno)->get();

        for($i=0; $i<sizeof($telefon);$i++){
            $telefon[$i]->slika = photo::where('telefon_id', $telefon[$i]->id)->first();
        }
        return $telefon;
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



}
