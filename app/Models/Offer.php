<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['date'];
    function product(){
        return $this->belongsTo(Product::class);
    }
    function user(){
        return $this->belongsTo(User::class);
    }
}
