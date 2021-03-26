<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'marks';

//    public function models()
//    {
//        return $this->hasMany(models::class);
//    }

    public function model_id()
    {
        return $this->hasOne('\App\Models\models', 'id', 'model_id');
    }


    public function mark_id()
    {
        return $this->hasOne(mark::class);
    }





}
