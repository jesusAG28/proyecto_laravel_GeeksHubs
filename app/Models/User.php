<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;

    protected $hidden = [
        'password'
    ];

    // 1:1 con Role
    public function roles(): HasOne
    {
        return $this->hasOne(Role::class, 'role_id');
    }
}
