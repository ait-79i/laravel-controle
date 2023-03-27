<?php

namespace Database\Factories;

use App\Models\Tache;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travaille>
 */
class TravailleFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'user_id' => User::inRandomOrder()->first()->id,
      'tache_id' => Tache::inRandomOrder()->first()->id
    ];
  }
}
