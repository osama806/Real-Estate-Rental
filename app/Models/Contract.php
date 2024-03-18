<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "owner_id",
        "estate_id",
        "price",
        "expired_date",
        "extension"
    ];
}
