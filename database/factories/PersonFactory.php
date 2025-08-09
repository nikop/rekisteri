<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake('fi_FI');

        return [
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'email' => $faker->safeEmail(),
            'address' => $faker->streetAddress(),
            'postcode' => $faker->postcode(),
            'city' => $faker->city(),
            'country' => $faker->country(),
            'phone' => $faker->phoneNumber(),
        ];
    }
}
