<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function home(){
        $offers = Offer::latest()->with(["product", "user"])->get();
        return view('home',['offers'=>$offers]);
    }
    public function index()
    {
        $offers = Offer::latest()->with(["product", "user"])->get();

        return view('offers.list',[
            'offers'=>$offers,
            'users'=>User::all(),
            'products'=>Product::all(),
            'categories'=>Category::all()
        ]);
    }
    public function filter(){
        if (request("name") != '') {
            $offers = Offer::latest()->where('title','like','%'.request('name').'%')->with(["product", "user"])->get();
            return view('offers.list',[
                'offers'=>$offers,
                'users'=>User::all(),
                'products'=>Product::all(),
                'categories'=>Category::all()
            ]);
        }
    }
    public function create()
    {
        return view("offers.create");
    }
   public function store()
    {
        $attributs = request()->validate([
            'date'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);
        Offer::create($attributs);
        return redirect('/offers');
    }
    public function delete($id){
        $Offer = Offer::findOrFail($id);
        $Offer->delete();
        return redirect('/');
    }
    public function edit($id){
        $offer = Offer::findOrFail($id);
        return view('offers.edit',['offer'=>$offer]);
    }
    public function describe($id){
        if (auth()->user()) {
            $offer = Offer::findOrFail($id);
            return view('offers.detail',['offer'=>$offer]);
        }else{
            return view('offers.error');
        }
        
    }
    public function update($id){
        $offer = Offer::findOrFail($id);
        $product = Product::findOrFail(request('product'));
        $offer->product_id = $product->id;
        $offer->save();
        return redirect('/offers');
        
    }
}
