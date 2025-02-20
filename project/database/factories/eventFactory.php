<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class eventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $pexelsImages = [
            'https://images.unsplash.com/photo-1543132220-3ec99c6094dc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D',
            'https://images.unsplash.com/photo-1556157382-97eda2d62296?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fHw%3D',
            'https://media.istockphoto.com/id/1038045986/photo/young-business-man-with-a-little-smile.webp?a=1&s=612x612&w=0&k=20&c=ve_GtRI9eZENj2XUfo-lTfB2eIJyKNFBWhkPxwmwOkQ=',
            'https://media.istockphoto.com/id/1325012946/photo/headshots-businesswoman.jpg?s=612x612&w=0&k=20&c=eTdE-nycTyaghXvaksOApaFhZeJhwRJk23xHEKn-aXc=',
            'https://media.istockphoto.com/id/1325012946/photo/headshots-businesswoman.jpg?s=612x612&w=0&k=20&c=eTdE-nycTyaghXvaksOApaFhZeJhwRJk23xHEKn-aXc=',
            'https://media.istockphoto.com/id/152178298/photo/portrait-of-confident-businesswoman-looking-straight.jpg?s=612x612&w=0&k=20&c=hcmsQIXXGvnfXHyCdYzML5Qa5dE-V1ymb8iAdgiz1rM=',
            'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmVzc2lvbmFsfGVufDB8fDB8fHww',
            'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cHJvZmVzc2lvbmFsfGVufDB8fDB8fHww',
            'https://images.unsplash.com/photo-1600275669439-14e40452d20b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHByb2Zlc3Npb25hbHxlbnwwfHwwfHx8MA%3D%3D',
            'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmVzc2lvbmFsfGVufDB8fDB8fHww',
        ];
        $imageUrl = $pexelsImages[array_rand($pexelsImages)];
        return [
            "id" => $this->faker->unique()->randomNumber(), 
            "title"=> $this->faker->title,
            "descrption"=> $this->faker->text(10),
            "data_creation"=> $this->faker->date(),
            "image"=> $imageUrl,
        ];
    }
}
