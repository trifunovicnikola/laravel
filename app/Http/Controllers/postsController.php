<?php

namespace App\Http\Controllers;
use App\Models\telefon;
use App\Models\mark;
use Illuminate\Support\Facades\DB;



class postsController
{
    public function show()
    {
//

        $javno= 1 ;
        return telefon::with('mark_id','slika_id', 'specifikacije' )->where('javno',$javno)->get();

    }
}
