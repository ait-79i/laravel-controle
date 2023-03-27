<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public $timestamps = false;
    use HasFactory;
    function taches()
    {
        return $this->hasMany(Tache::class);
    }

    
}
