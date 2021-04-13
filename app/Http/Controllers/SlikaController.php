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
    public function dajSliku($id)
    {
        return photo::find($id);
    }
}
