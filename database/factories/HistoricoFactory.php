<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Histotico>
 */
class HistoricoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'historico'=>fake()->url(),
            'idusuario' => random_int(1,20),
            'data'=>fake()->date(),
            'hora'=>fake()->time(),
            'ip'=>'127.0.0.1',
            'navedador'=>'Google Chrome',
            'usuario'=>fake()->name()
        ];
    }
}
