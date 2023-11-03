<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
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
            'usuario'=>fake()->name(),
            'password'=>fake()->password(),
            'habilitado'=>'activo',
            'date'=>fake()->date(),
            'idrole'=>random_int(1,20),
            'usuariocreate'=>random_int(1,20),
            'usuariomodification'=>random_int(1,20)
        ];
    }
}
