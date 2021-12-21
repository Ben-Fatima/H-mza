<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=> Category::factory(),
            'name'=> $this->faker->word(),
            'price'=>$this->faker->randomNumber(),
            'weight'=>$this->faker->randomNumber(),
            'width'=>$this->faker->randomNumber(),
            'height'=>$this->faker->randomNumber(),
            'depth'=>$this->faker->randomNumber(),
            'life_time'=>$this->faker->randomNumber()
        ];
    }
}
