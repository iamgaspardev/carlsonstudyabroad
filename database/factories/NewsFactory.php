<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $news_name= $this->faker->unique()->word($nb=4,$asText=true);
        $slug = Str::slug($news_name);
        return [
            'title'=> $news_name,
            'slug' => $slug,
            'description'=> $this->faker->text(10000),
            'image'=>'news'.$this->faker->unique()->numberBetween(1,22).'.jpg',
        ];
    }
}
