<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo;
class fileController extends Controller
{
public function  file(Request $request)
{
    $photo = new photo;
    if ($request->hasFile('slika')) {
$completeFileName=$request->file('slika')->getClientOriginalName();
$filenameonly = pathinfo($completeFileName,PATHINFO_FILENAME);
$extension = $request->file('slika')->getClientOriginalExtension();
$compPic =str_replace(' ','_',$filenameonly).'_'.rand() .'_'.time(). '.'.
    $extension;
$path=$request->file('slika')->storeAs('public/slike',$compPic);

   $photo->slika=$compPic;
   $photo->telefon_id = $request->telefon_id;
   $photo->save();

}



if ($photo->save())
{
        return $photo;
}
else{
    return ['status'=>true,'message'=>'Nije dobro '];
}
}}
