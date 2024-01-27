<?php

namespace Database\Factories;

use App\Models\MyProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'my_profile_id' =>MyProfile::inRandomOrder()->first()->id,
            'title' => fake()->sentence(),
            'description' => fake()->sentence(),
            'status' => fake()->boolean(),
            'visit' => fake()->numberBetween(1, 100),
        ];
    }
}
