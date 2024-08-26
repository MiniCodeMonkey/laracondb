<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function talks()
    {
        return $this->belongsToMany(Talk::class, 'events_talks');
    }

    public function speakers()
    {
        return $this->hasManyThrough(Speaker::class, Talk::class);
    }
}
