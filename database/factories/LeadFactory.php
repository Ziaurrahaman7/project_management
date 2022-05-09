<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->title(),
            'email' =>$this->faker->email(),
            'leadValue' =>$this->faker->randomNumber(),
            'assigned' =>$this->faker->name(),
            'status' =>$this->faker->randomNumber(),
            'note' =>$this->faker->paragraph(),
            'source'=>$this->faker->title(),
            'tag'=>$this->faker->word(),
            'lastContacted'=>$this->faker->date(),
            'totalBudget'=>$this->faker->randomNumber(),
            'targetDate'=>$this->faker->date(),
            'contentType'=>$this->faker->paragraph(),
            'companyName'=>$this->faker->name(),
            'street'=>$this->faker->address(),
            'city'=>$this->faker->city(),
            'state'=>$this->faker->address(),
            'city'=>$this->faker->city(),
            'state' =>$this->faker->address(),
            'zipcode' =>$this->faker->countryCode(),
            'country'=>$this->faker->country(),
            'website' =>$this->faker->url()
        ];
    }
}
