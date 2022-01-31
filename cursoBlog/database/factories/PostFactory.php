<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //em PostFactory tbm vai criar um user e uma categoria tudo de uma vez
            //vai criar um user e uma categoria a cada post
            'user_id'=>User::factory(),
            'category_id'=>Category::factory(),
            'title'=> $this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            //colocar os paragrafos separados por tags <p>, com uso de implode
            'excerpt'=> '<p>'.implode('</p><p>',$this->faker->paragraphs(2)).'</p>',
            'body'=> '<p>'.implode('</p><p>',$this->faker->paragraphs(6)).'</p>'
            
            //
        ];
    }
}
