<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Work extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $timestamps = true;
    
    public function artist(): BelongsTo
    {
        return $this->BelongsTo(Artist::class, 'author_id');
    }

    public function event(): BelongsTo
    {
        return $this->BelongsTo(Event::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(WorkImage::class);
    }
}
