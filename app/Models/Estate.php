<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estate extends Model
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
        "street_name",
        "reserved",
        "rented"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}
