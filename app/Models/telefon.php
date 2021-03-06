<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefon extends Model
{
    use HasFactory;
    protected $table = 'telefons';

    public function mark_id()
    {
        return $this->hasOne('\App\Models\mark', 'id', 'mark_id');
    }
    public function slika_id()
    {
        return $this->hasMany(photo::class);
    }
    public function specifikacije()
    {
        return $this->hasOne('\App\Models\configuration', 'id', 'specifikacije');
    }


    public function models()
    {
        return $this->hasOne('\App\Models\mark', 'id', 'mark_id');
    }
}
