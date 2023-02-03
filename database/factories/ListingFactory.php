<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> '2',
            'name' => $this->faker->name(),
            'address'=> $this->faker->paragraph(),
            'website'=> 'website.net',
            'email'=> $this->faker->Email(),
            'phone'=> $this->faker->paragraph(),
            'bio'=> $this->faker->text(),


        ];
    }
}
