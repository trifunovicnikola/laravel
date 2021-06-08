<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'marks';



    public function model_id()
    {
        return $this->hasMany('\App\Models\models', 'id', 'model_id');
    }








}
