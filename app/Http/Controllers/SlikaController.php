<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;

class SlikaController extends Controller
{
    public function show()
    {
        return photo::all();
    }
    public function dajSliku($telefon_id)
    {
        return photo::find($telefon_id);
    }
}
