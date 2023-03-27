<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travaille extends Model
{
  public $timestamps =  false;
  use HasFactory;

  public function user()
  {
    return $this->belongsToMany(User::class);
  }

  public function tache()
  {
    return $this->belongsTo(Tache::class);
  }
}
