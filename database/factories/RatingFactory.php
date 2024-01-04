<?php

namespace Database\Factories;

use App\Models\Meal;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    protected $model = Rating::class;

    public function definition(): array
    {
        return [
            'meal_id' => Meal::factory(),
            'rating' => fake()->numberBetween(1, 5),
            'comment' => fake()->text(50),
        ];
    }
}
