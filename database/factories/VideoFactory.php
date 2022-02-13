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
        $perisanFaker = \Faker\Factory::create('fa_IR');
        return [
            'name'=> $perisanFaker->name(),
            'url'=> $this->faker->url(),
            'length'=>120,
            'slug'=>$this->faker->slug(),
            'description'=> $perisanFaker->realtext(),
            'thumbnail' => 'https://loremflickr.com/320/240?random=' . rand(1,99)
        ];
    }
}
