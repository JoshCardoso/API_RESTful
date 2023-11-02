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
            'idperson'=>random_int(1,20),
            'firstname'=>fake()->name(),
            'lastname'=>fake()->name(),
            'apelido'=>fake()->name(),
            'usuariocreate'=>fake()->date(),
            'usuariomodification'=>fake()->date()
        ];
    }
}
