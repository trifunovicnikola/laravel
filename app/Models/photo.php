<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'photos';
    protected  $fillable=['slika'];


//    public function slika_id()
//    {
//        return $this->hasOne(photo::class);
//    }
    public function telefon_id()
    {
        return $this->hasOne('\App\Models\telefon', 'id', 'telefon_id');
    }
}
