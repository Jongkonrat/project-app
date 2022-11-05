<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    // protected $primaryKey = 'customerNumber';

    protected $fillable = [
        'customerNumber', 'productCode', 'quantity'
    ];
}
