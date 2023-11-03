<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname'=>fake()->name(),
            'lastname'=>fake()->name(),
            'apelido'=>fake()->name(),
            'usuariocreate'=>random_int(1,20),
            'usuariomodification'=>random_int(1,20)
        ];
    }
}
