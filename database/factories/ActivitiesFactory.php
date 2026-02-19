<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivitiesFactory extends Factory
{
    protected $model = \App\Models\Activities::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->sentence(3),
            'description' => $this->faker->sentence(),
            'activity_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'categories_id' => Categories::factory(),
            'user_id' => User::factory(),
        ];
    }
}
