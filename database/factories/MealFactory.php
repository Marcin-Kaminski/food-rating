<?php

namespace Database\Factories;

use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    protected $model = Meal::class;

    public function definition()
    {
        $ingredients = [
            fake()->word(),
            fake()->word(),
            fake()->word(),
            fake()->word(),
            fake()->word()
        ];

        return [
            'name' => fake()->name(),
            'ingredients' => json_encode($ingredients),
            'descriptions' => fake()->text(100),
            'image_url' => fake()->imageUrl(),
            'category' => fake()->word(),
        ];
    }
}
