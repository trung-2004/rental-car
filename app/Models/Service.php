<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "service";

    protected $fillable=[
        'title',
        'description',
        'price',
    ];
    public function rental(){
        return $this->belongsToMany(Rental::class, "rental_service")->withPivot('price');
    }
}
