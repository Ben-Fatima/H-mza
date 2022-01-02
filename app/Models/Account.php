<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $guarded = [];
    function offers(){
        return $this->hasMany(Offer::class);
    }
    function user(){
        return $this->belongsTo(User::class);
    }
    function accountType(){
        return $this->belongsTo(AccountType::class);
    }
    function transaction(){
        return $this->belongsTo(Transaction::class);
    }
}
