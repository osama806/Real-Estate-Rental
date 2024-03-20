<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
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

    public function reserve(): HasMany
    {
        return $this->hasMany(Reserve::class);
    }

    public function contract(): HasMany
    {
        return $this->hasMany(Contract::class);
    }
}
