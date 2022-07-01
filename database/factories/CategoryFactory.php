<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // I had to make 'name' unique
            'name' => $this->faker->unique()->word,
            'slug' => $this->faker->slug
        ];
    }
}
