<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_name'=>$this->faker->name(),
            'first_name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'details'=>$this->faker->paragraph(),
            'billing_zipcode'=>$this->faker->randomNumber(),
            'billing_country'=>$this->faker->country(),
            'billing_telephone'=>$this->faker->phoneNumber(),
            'billing_city'=>$this->faker->city(),
            'shipping_zipcode'=>$this->faker->countryCode(),
            'shipping_country'=>$this->faker->country(),
            'shipping_telephone'=>$this->faker->phoneNumber(),
            'shipping_city'=>$this->faker->city(),
            'project_type'=>$this->faker->title()
        ];
    }
}
