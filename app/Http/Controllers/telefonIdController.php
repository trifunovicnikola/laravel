<?php

namespace App\Http\Controllers;
use App\Models\mark;
use App\Models\photo;
use App\Models\telefon;
//use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use App\Models\Post;
use Symfony\Component\Console\Input\Input;

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

return DB::select('select tel.created_at as okacen,tel.vrijeme as vrijeme,  tel.stanje as stanje,tel.id as id, tel.model as model, marks.marka_naziv as naziv, tel.cijena as cijena , photos.slika as slika ,tel.prodavac as prodavac ,tel.kontakt as kontakt
FROM telefons as tel
join marks on (marks.id = tel.mark_id)
join photos on (photos.telefon_id = tel.id)
where tel.javno = 1
group by photos.telefon_id');
    }




    public function filtrirajSve(Request $request){
$javno=1;

        $marka_id=$request->marka_id;
        $cijena_min=$request->cijena_min;
        $cijena_max=$request->cijena_max;
        $model_naziv=$request->model_naziv;
        $ram=$request->ram;
        $prednja=$request->prednja;
        $zadnja=$request->zadnja;
        $memorija=$request->memorija;
        $query = telefon::select('telefons.*')->where('javno',$javno)->with('mark_id')
            ->join('marks', 'marks.id', 'telefons.mark_id')
            ->join('photos', 'photos.telefon_id', 'telefons.id')
            ->join('configurations','configurations.id','telefons.specifikacije');

        if($marka_id)
            $query = $query->where('telefons.mark_id', $marka_id);

        if ($cijena_min)
            $query = $query->where('telefons.cijena', '>=',$cijena_min);

        if ($cijena_max)
            $query = $query->where('telefons.cijena', '<',$cijena_max);

        if ($model_naziv )
            $query = $query->where('telefons.model', $model_naziv);
        if ($ram)
            $query=$query->where('configurations.ram',$ram);
        if ($prednja)
            $query=$query->where('configurations.kamera_prednja',$prednja);
        if ($zadnja)
            $query=$query->where('configurations.kamera_zadnja',$zadnja);
        if ($memorija)
            $query=$query->where('configurations.memorija',$memorija);






        $query = $query->groupBy('id')->get();
        for($i=0; $i<sizeof($query);$i++){
            $query[$i]->slika = photo::where('telefon_id', $query[$i]->id)->first();

        }


        $query = $query;
        return $query ;

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





        $cijena1 = $request->cijena1=20;
        $cijena2 = $request->cijena2=300;

        $javno= 1 ;
        $telefon= telefon::with('mark_id', 'specifikacije' )->whereBetween('cijena', [$cijena1, $cijena2])->where('javno',$javno)->get();

        for($i=0; $i<sizeof($telefon);$i++){
            $telefon[$i]->slika = photo::where('telefon_id', $telefon[$i]->id)->first();
        }
        return $telefon;

    }



}
