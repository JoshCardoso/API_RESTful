<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idrole'=>random_int(1,20),
            'idpagina'=>random_int(1,20),
            'description'=>fake()->paragraph(),
            'usuariocreate'=>fake()->date(),
            'usuariomodification'=>fake()->date()
        ];
    }
}
