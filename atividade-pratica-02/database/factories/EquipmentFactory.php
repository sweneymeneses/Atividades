<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $availableEquipment = [
            'Notebook',
            'Iphone',
            'Smartphone',
            'TV',
            'Computer',
            'Xbox',
            'Playstation',
        ];

        return [
            'name' => $availableEquipment[rand(0, 6)],
        ];
    }
}
