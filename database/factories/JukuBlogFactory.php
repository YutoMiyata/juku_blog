<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JukuBlog>
 */
class JukuBlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(20),
            'gender' => $this->faker->boolean(),
            'title' => $this->faker->realText(10),
            'content' => $this->faker->realText(100),
            'teacher' => $this->faker->name(20),
            'score' => $this->faker->numberBetween(1,100),
        ];
    }
}
