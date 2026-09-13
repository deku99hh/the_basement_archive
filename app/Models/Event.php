<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = true;

    public function works(): HasMany
    {
        return $this->hasMany(Work::class);
    }

    public function togglestatus()
    {
        if ($this->event_status == 'done') {
            $this->event_status = 'ongoing';
        } else if ($this->event_status == 'ongoing') {
            $this->event_status = 'done';
        }
        return $this->save(); 
    }
}
