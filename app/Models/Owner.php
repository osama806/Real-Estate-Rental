<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
    ];

    public function estate(): HasMany
    {
        return $this->hasMany(Estate::class);
    }
}
