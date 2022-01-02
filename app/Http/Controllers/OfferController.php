<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::latest()->with(["product", "account.user"])->get();

        return view('offers',[
            'offers'=>$offers,
            'accounts'=>Account::all(),
            'products'=>Product::all()
        ]);
    }
    public function create()
    {
        return view("create-Offers");
    }
   public function store()
    {
        $attributs = request()->validate([
            "Name" => "required",
            "Height" => "required|numeric",
            "Width" => "required|numeric",
            "Weight" => "required|numeric",
            "Depth" => "required|numeric",
        ]);
        Offer::factory()->create([
            "name" => $attributs["Name"],
            "height" => $attributs["Height"],
            "width" => $attributs["Width"],
            "weight" => $attributs["Weight"],
            "depth" => $attributs["Depth"],
        ]);
        return redirect("/");
    }
    public function delete($id){
        $Offer = Offer::findOrFail($id);
        $Offer->delete();
        return redirect('/');
    }
    public function edit($id){
        $Offer = Offer::findOrFail($id);
        return view('edit-Offer',['Offer'=>$Offer]);
    }
    public function update($id){
        $Offer = Offer::findOrFail($id);
        $attributs = request()->validate([
            "Name" => "required",
            "Height" => "required|numeric",
            "Width" => "required|numeric",
            "Weight" => "required|numeric",
            "Depth" => "required|numeric",
        ]);
        $Offer->update($attributs);
        return redirect('/');
    }
}
