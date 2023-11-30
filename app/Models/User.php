<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    use HasFactory;

    protected $hidden = [
        'password'
    ];

    // 1:1 con Role
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
