<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Party extends Model
{
    use HasFactory;

    protected $table = 'partys';

    // N:N con User
    public function partys(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'users_partys', 'party_id', 'user_id')
            ->withPivot('owner', 'active');
    }
}
