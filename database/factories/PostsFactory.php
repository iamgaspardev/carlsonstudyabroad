<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $posts_name= $this->faker->unique()->word($nb=4,$asText=true);
        $slug = Str::slug($posts_name);
        return [
            'title'=> $posts_name,
            'slug' => $slug,
            'description'=> $this->faker->text(10000),
            'image'=>'posts'.$this->faker->unique()->numberBetween(1,22).'.jpg',
        ];
    }
}
