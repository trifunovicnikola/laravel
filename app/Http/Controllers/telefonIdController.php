<?php

namespace App\Http\Controllers;
use App\Models\telefon;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

class telefonIdController
{
    public function show($id)
    {

//        return DB::select('select * from telefons  where id ='.$id);
        return telefon::with('mark_id','slika_id', 'specifikacije')->find($id);


    }

    public function obrisi($id)
    {
        DB::select('delete from telefons where id ='.$id);
        return redirect('/api/telefoni');
    }

    public function filtriraj($mark_id)
    {
        return DB::select('select * from telefons where mark_id ='.$mark_id);
    }




}
