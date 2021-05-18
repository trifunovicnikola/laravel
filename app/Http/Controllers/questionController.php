<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;

class questionController extends Controller
{
    public function send(Request $req)
    {
        $question = new question();
        $question->email = $req->email;
        $question->poruka= $req->poruka;
        $question->save();
        return $question;
    }
    public function  show()
    {
        return question::all();
    }
}
