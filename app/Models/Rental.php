<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $table = "rental";

    protected $fillable=[
        'customer_id',
        'car_id',
        'rental_date',
        'return_date',
        'pickup_location',
        'message',
        'address',
        'email',
        'telephone',
        'rental_type',
        'car_price',
        'additional_fee',
        'total_amount',
        'status',
        'payment_method',
        'is_paid',
    ];
}
