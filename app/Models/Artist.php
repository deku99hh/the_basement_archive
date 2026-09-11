<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Authenticatable
{
    protected $guarded = [];
    protected $hidden = ['password'];
    public $timestamps = true;
    use HasFactory;

    public function works(): HasMany
    {
        return $this->hasMany(Work::class, 'author_id');
    }
    
}
