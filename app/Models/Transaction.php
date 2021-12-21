<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    function accounts(){
        $this->hasMany(Account::class);
    }
    function paymentMethods(){
        $this->hasOne(PaymentMethod::class);
    }
}
