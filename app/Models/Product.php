<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    function categories(){
        return $this->belongsTo(Category::class);
    } 
    function offers(){
        return $this->belongsTo(Offer::class);
    }
}
