<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'photos';
protected  $fillable=['slika1'];
    public function slika_id()
    {
        return $this->hasOne(photo::class);
    }
}
