<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'key'             => 'Rob' . $this->faker->unique()->numberBetween(100, 999),
            'title'           => $this->faker->sentence(3),
            'cover'           => $this->faker->imageUrl(640, 480),
            'content'         => $this->faker->paragraphs(3, true),
            'robotics_kit_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
