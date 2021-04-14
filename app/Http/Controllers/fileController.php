<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo;
class fileController extends Controller
{
public function  file(Request $request)
{
    $photo = new photo;
    if ($request->hasFile('slika1')) {
$completeFileName=$request->file('slika1')->getClientOriginalName();
$filenameonly = pathinfo($completeFileName,PATHINFO_FILENAME);
$extension = $request->file('slika1')->getClientOriginalExtension();
$compPic =str_replace(' ','_',$filenameonly).'_'.rand() .'_'.time(). '.'.
    $extension;
$path=$request->file('slika1')->storeAs('public/slike',$compPic);

if ($request->hasFile('slika2')) {
            $completeFileName1=$request->file('slika2')->getClientOriginalName();
            $filenameonly1 = pathinfo($completeFileName1,PATHINFO_FILENAME);
            $extension1 = $request->file('slika2')->getClientOriginalExtension();
            $compPic1 =str_replace(' ','_',$filenameonly1).'_'.rand() .'_'.time(). '.'.
                $extension1;
            $path=$request->file('slika2')->storeAs('public/slike',$compPic1);

    if ($request->hasFile('slika3')) {
        $completeFileName2=$request->file('slika3')->getClientOriginalName();
        $filenameonly2 = pathinfo($completeFileName2,PATHINFO_FILENAME);
        $extension2 = $request->file('slika3')->getClientOriginalExtension();
        $compPic2 =str_replace(' ','_',$filenameonly2).'_'.rand() .'_'.time(). '.'.
            $extension2;
        $path=$request->file('slika3')->storeAs('public/slike',$compPic2);








   $photo->slika1=$compPic;
    $photo->slika2=$compPic1;
        $photo->slika3=$compPic2;
        $photo->save();

}}}


    if ($photo->save()){
//        return ['status'=>true,'message'=>'Sacuvan '];
        return $photo;

    }
else{
    return ['status'=>true,'message'=>'Nije dobro '];

}
}}
