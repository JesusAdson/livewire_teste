<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Limit>
 */
class LimitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /**
         * User $user
         */
        $user = User::factory()->create();
        return [
            "id"        => $this->faker->randomDigitNotZero(),
            "user_id"   => $user->id
        ];
    }
}
