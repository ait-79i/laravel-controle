<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Projet;
use App\Models\Tache;
use App\Models\Travaille;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory(10)->create();
    Projet::factory(5)->create();
    Tache::factory(20)->create();
    Travaille::factory(15)->create();
  }
}
