<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    function offers(){
        return $this->hasMany(Offer::class);
    }
    function users(){
        return $this->belongsTo(User::class);
    }
    function accountTypes(){
        return $this->belongsTo(AccountType::class);
    }
    function transactions(){
        return $this->hasOne(Transaction::class);
    }
}
