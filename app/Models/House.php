<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        "broker",
        "type",
        "price",
        "beds",
        "paths",
        "address",
        "state",
        "locality",
        "sub_locality",
        "street_name"
    ];
}
