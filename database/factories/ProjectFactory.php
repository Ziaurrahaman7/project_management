<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client'=>$this->faker->name(),
            'title'=>$this->faker->title(),
            'start_date'=>$this->faker->date(),
            'deadline'=>$this->faker->date(),
            'description'=>$this->faker->paragraph(),
            'tag'=>$this->faker->word(),
            'category'=>$this->faker->title(),
            'assigned'=>$this->faker->name(),
            'status'=>$this->faker->name(),
            'billing'=>$this->faker->randomNumber(),
            'billing_type'=>$this->faker->word(),
            'estimated__hours'=>$this->faker->date(),
            'estimated_costs'=>$this->faker->randomNumber(),
            'quality_level'=>$this->faker->word(),
            'total_images'=>$this->faker->randomNumber(),
            'total_pages'=>$this->faker->randomNumber(),
            'comments'=>$this->faker->paragraph(),
        ];
    }
}
