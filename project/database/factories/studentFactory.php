<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class studentFactory extends Factory
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
            "date_entre"=> $this->faker->date(),    
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
