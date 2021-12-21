<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'payment_method_id'=>PaymentMethod::factory(),
            'seller_id'=>Account::factory(),
            'buyer_id'=>Account::factory(),
            'date'=>$this->faker->date(),
            'total'=>$this->faker->randomNumber()
        ];
    }
}
