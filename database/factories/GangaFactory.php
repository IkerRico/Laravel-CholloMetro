<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ganga>
 */
class GangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(5),
            'description' => fake()->text(50),
            'url'=>fake()->url(),
            'category_id' => Category::inRandomOrder()->first(),
            'likes' => rand(1,100),
            'unlikes' => rand(1,100),
            'price' => fake()->randomFloat(2, 0, 50),
            'price_sale' => (fake()->randomFloat(2, 0, 50) * fake()->randomFloat(2,0,1)),
            'aviable' => fake()->boolean(),
        ];
    }
}
