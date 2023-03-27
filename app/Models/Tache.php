<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    public $timestamps = false;
    use HasFactory;
    function projet()
    {
        return $this->belongsTo(Projet::class);
    }
    function travailles()
    {
        return $this->hasMany(Travaille::class);
    }
}
