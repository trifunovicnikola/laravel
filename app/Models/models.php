<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class models extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'models';

//    public function marka()
//    {
//        return $this->hasOne('\App\Models\mark', 'id', 'marka');
//    }

//    public function marka()
//    {
//        return $this->belongsTo('\App\Models\mark', 'id', 'marka');
//    }

    public function model_id()
    {
        return $this->hasMany(models::class);
    }



}
