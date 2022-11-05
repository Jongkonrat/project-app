<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    public $timestamps = false;
    protected $primatyKey = 'customerNumber';
    protected $fillable = [
        'customerNumber', 
        'customerName', 
        'contactFirstName',
        'contactLastName',
        'phone',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'postalCode',
        'country'
    ];

<<<<<<< Updated upstream
}
=======
}
>>>>>>> Stashed changes
