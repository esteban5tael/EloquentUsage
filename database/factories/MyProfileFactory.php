<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyProfile>
 */
class MyProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all();
        return [
            'user_id' => fake()->unique()->numberBetween(1, $user->count()),
            'category_id' => Category::inRandomOrder()->first()->id,
            'name' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'address' => fake()->streetAddress(),
            'phone' => fake()->unique()->tollFreePhoneNumber(),
            'email' => fake()->unique()->email(),
            'status' => fake()->boolean(),
        ];
    }
}
