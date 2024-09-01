<?php 
// app/Models/Loan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'mobile', 'pan', 'address', 'amount', 'year',
    ];
}

