<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $persianFaker = Faker\Factory::create('fa_IR');
        return [
            //
            $persianFaker->nationalCode(),
            
        ];
    }
}
