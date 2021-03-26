<?php

namespace App\Http\Controllers;
use App\Models\telefon;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

class telefonIdController
{
    public function show($id)
    {

        return DB::select('select * from telefons  where id ='.$id);


    }

    public function obrisi($id)
    {
        DB::select('delete from telefons where id ='.$id);
        return redirect('/api/telefoni');
    }




}
