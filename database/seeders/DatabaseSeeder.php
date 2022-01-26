<?php

namespace Database\Seeders;

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
        //$user = User::factory()->create();
        //$category = Category::factory()->create();
        //$product = Product::factory()->create([
        //    'category_id'=>$category->id
        //]);
        //$offer = Offer::factory(7)->create([
        //    'user_id'=>$user->id,
        //    'product_id'=>$product->id
        //]);
        Category::factory()->create([
            'name' => 'Books'
        ]);
        Category::factory()->create([
            'name' => 'Beauty & Personal Care'
        ]);
        Category::factory()->create([
            'name' => 'Electronics'
        ]);
        Category::factory()->create([
            'name' => 'Computers'
        ]);
        Category::factory()->create([
            'name' => 'Clothing, Shoes and Jewelry'
        ]);
        Category::factory()->create([
            'name' => 'Office Products'
        ]);
      }
}
