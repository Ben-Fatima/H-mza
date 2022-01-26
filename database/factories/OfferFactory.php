<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'product_id'=>Product::factory(),
            'title'=>$this->faker->word(),
            'date'=>$this->faker->date(),
            'description'=>$this->faker->paragraph(),
            'adress'=>$this->faker->address()
        ];
    }
}
