<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Code>
 */
class CodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->numerify('########'),
            'desc' => $this->faker->sentence(),
            'long' => $this->faker->randomFloat(6, -180, 180), // إحداثيات عشوائية
            'date' => $this->faker->date(),
            'company' => $this->faker->company(),
            'canada' => $this->faker->city(),
            'number' => $this->faker->randomNumber(8, true),
            // 'Arrival' => $this->faker->dateTime()->format('Y-m-d H:i:s'),
            'time' => $this->faker->time(),
            'duration' => $this->faker->time(),
            'from' => $this->faker->city(),
            'to' => $this->faker->city(),
            'Receiver' => $this->faker->name(),
            'hotel' => $this->faker->company() . ' Hotel',
            'companions' => [
                $this->faker->company() . ' فندق',
                $this->faker->company() . ' منتجع',
                $this->faker->company() . ' نزل',
                $this->faker->company() . ' بيت ضيافة',
            ],

            'contact' => $this->faker->phoneNumber(),
            'text' => $this->faker->paragraph(),
            'images' => [
                'https://via.placeholder.com/150',
                'https://via.placeholder.com/150',
                'https://via.placeholder.com/150',
            ],
        ];
    }
}
