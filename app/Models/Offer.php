<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $guarded = [];
    function products(){
        return $this->belongsTo(Product::class);
    }
    function accounts(){
        return $this->belongsTo(Account::class);
    }
}
