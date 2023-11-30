<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    // N:N con Party
    public function partys(): BelongsToMany
    {
        return $this->belongsToMany(Party::class, 'users_partys', 'user_id', 'party_id')
            ->withPivot('owner', 'active');
    }
}
