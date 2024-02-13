<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' =>fake() -> word(),
            'stazione_di_partenza' => fake() -> sentence(2),
            'stazione_di_arrivo' => fake() -> sentence(2),
            'orario_di_partenza'=>fake() -> dateTimeBetween('-1 week', '+1 week'),
            'orario_di_arrivo'=>fake() -> dateTimeBetween('-1 week', '+1 week'),
            'codice_treno' => fake() -> bothify('?????-#####'),
            'numero_carrozze' => fake() -> numberBetween(1, 15),
            'in_orario' => fake() -> boolean(),
            'cancellato'=> fake() -> boolean(),
        ];
    }
}
