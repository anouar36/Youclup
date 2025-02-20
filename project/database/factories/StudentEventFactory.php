<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id" => $this->faker->unique()->randomNumber(), 
            "date_creation"=> $this->faker->date(),    
            'created_at' => now(),
            'updated_at' => now(),   

        ];
    }
}
