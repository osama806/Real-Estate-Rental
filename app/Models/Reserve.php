<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "estate_id",
        "reservation_deposit",
        "expired_date"
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
