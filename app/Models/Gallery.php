<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "gallery";

    protected $fillable=[
        'thumbnail',
        'car_id'
    ];
    public function cars(){
        return $this->belongsTo(Car::class,"car_id");
    }
}
