<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = [1 => 'Preventiva', 2 => 'Corretiva', 3 => 'Urgente'];

        return [
            'description' => 'Lorem ipsum dolor sit amet.',
            'date' => $this->faker->dateTimeThisYear(),
            'type' => rand(1, count($type))
        ];
    }
}
