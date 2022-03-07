<?php

namespace Database\Factories;

use HasFactory;
use App\Models\Video;
use App\Models\Category;
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
            "description" => $persianFaker->realText(),
            "thumbnail" => 'https://loremflickr.com/320/240?random=' . rand(1,99),
            'category_id' => Category::first() ?? Category::factory()
        ];
    }
}
