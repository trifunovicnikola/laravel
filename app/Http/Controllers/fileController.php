<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo;
class fileController extends Controller
{
public function  file(Request $request)
{
    $photo = new photo;
    if ($request->hasFile('photos')) {
$completeFileName=$request->file('photos')->getClientOriginalName();
$filenameonly = pathinfo($completeFileName,PATHINFO_FILENAME);
$extension = $request->file('photos')->getClientOriginalExtension();
$compPic =str_replace(' ','_',$filenameonly).'_'.rand() .'_'.time(). '.'.
    $extension;
$path=$request->file('photos')->storeAs('public/slike',$compPic);
   $photo->slika1=$compPic;
        $photo->slika2=$compPic;
        $photo->slika3=$compPic;

    }
    if ($photo->save()){
        return ['status'=>true,'message'=>'Sacuvan '];

    }
else{
    return ['status'=>true,'message'=>'Nije dobro '];

}
}}
