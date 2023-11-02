<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pagina>
 */
class PaginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'usuariocreacion' => fake()->date(),
            'usuariomodificacion'=> fake()->date(),
            'url' => '/teste',
            'estado'=> 'ativo',
            'nome'=> fake()->name(),
            'descripcion'=> fake()->paragraph(),
            'icone'=> 'setting',
            'tipo'=> '?'
        ];
    }
}
