<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leave>
 */
class LeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company'=>$this->faker->company(),
            'department'=>$this->faker->jobTitle(),
            'empoloyeeName'=>$this->faker->name(),
            'leaveType'=>$this->faker->word(),
            'startDate'=>$this->faker->date(),
            'finishDate'=>$this->faker->date(),
            'status'=>$this->faker->word(),
            'attatchment'=>$this->faker->word(),
            'halfDay'=>$this->faker->word(),
            'reason'=>$this->faker->paragraph()
        ];
    }
}
