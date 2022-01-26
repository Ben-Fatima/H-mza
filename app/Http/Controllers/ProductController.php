<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('products.create',[
            'categories' => Category::all()
        ]);
    }
    public function store(){
        $attributs = request()->validate([
            'name' => 'required',
            'price' => 'required',
            'life_time' => 'required',
            'weight' => 'required',
            'width' => 'required',
            'height' => 'required',
            'depth' => 'required',
            'category' => 'required',
            'picture' => 'required',
        ]);
        $attributs['user_id'] = auth()->user()->id;
        $attributs['picture'] = request()->file('picture')->store('product');
        Product::create($attributs);
        return redirect('/profile');
    }
    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/profile');
    }
}
