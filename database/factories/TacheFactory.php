<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tache>
 */
class TacheFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'nom_tache' => $this->faker->company(),
      'date_debut' => $this->faker->date(),
      'date_fin' => $this->faker->date(),
      'cout' => $this->faker->randomNumber(5, true),
      'projet_id' => Projet::all()->random()->id
    ];
  }
}
