<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class configuration extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'configurations';

    public function konfiguracije()
    {
        return $this->hasOne(configuration::class);
    }
}
