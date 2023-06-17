<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coche;

class CocheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Coche::class;


    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement(['Honda', 'Kawasaki', 'Ducati', 'Derbi', 'KTM', 'Aprilia', 'BMW', 'Yamaha', 'Bultado', 'Suzuki', 'Triumph', 'Kymco']),
            'modelo' => $this->faker->word(),
            'kms' => $this->faker->numberBetween(0, 100000),
            'precio' => $this->faker->randomFloat(2, 1000, 50000),
            'matriculado' => $this->faker->boolean
        ];
    }
}
