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
    public function definition()
    {
        return [
            'cu_code' => $this->faker->text(20),
            'name' => $this->faker->text(20),
            'credits' => $this->faker->randomFloat(1,0,15),
        ];
    }
}
