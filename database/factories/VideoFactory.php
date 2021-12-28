<?php

namespace Database\Factories;

use HasFactory;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    protected $model = Video::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $persianFaker = \Faker\Factory::create('fa_IR');
        return [
            'name' => $persianFaker->name(),
            "url" => $this->faker->url(),
            "length" => $this->faker->randomNumber(3,false),
            "slug" => $this->faker->slug(),
            "description" => "This is friends sitcom"
        ];
    }
}
