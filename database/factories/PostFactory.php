<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image_url' => $this->faker->imageUrl(640, 480, 'cats'),
            'body' => $this->faker->paragraph(3, false),
            'created_at' => $this->faker->date()
        ];
    }
}
