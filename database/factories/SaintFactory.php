<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saint>
 */
class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // creazione dati fake per testare 
        return [
            "nome" => fake() -> name() ,
            "luogoDiNascita" => fake() -> city(),
            "dataDiNascita" => fake() -> dateTime(),
            "numeroDiMiracoli" => fake() ->numberBetween(1,100),
        ];
    }
}


