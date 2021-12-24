<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\AccountTypes;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();
        $type = AccountTypes::factory()->create();
        $account = Account::factory()->create([
            'user_id'=>$user->id,
            'type_id'=>$type->id,
        ]);
        $category = Category::factory()->create();
        $product = Product::factory()->create([
            'category_id'=>$category->id
        ]);
        $offer = Offer::factory()->create([
            'account_id'=>$account->id,
            'product_id'=>$product->id
        ]);
      }
}
