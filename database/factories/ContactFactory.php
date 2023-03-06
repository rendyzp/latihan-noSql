<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private static $order = 1;

    public function definition()
    {

        return [
            'index' => self::$order++,
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail()
        ];
    }
}
