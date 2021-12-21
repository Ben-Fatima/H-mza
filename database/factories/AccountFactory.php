<?php

namespace Database\Factories;

use App\Models\AccountType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
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
            'type_id'=>AccountType::factory(),
            'phone_number'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'adress'=>$this->faker->address()
        ];
    }
}
