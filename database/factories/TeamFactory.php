<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'image' => $this->faker->image(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElements(['male', 'female']),
            'jobTitle' => $this->faker->title(),
            'sallary' => $this->faker->randomNumber(),
            'sallaryTerm' => $this->faker->paragraph(),
            'dateofHire' => $this->faker->date(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password(),
            'role' => $this->faker->randomElements(['manger', 'developer'])
        ];
    }
}
