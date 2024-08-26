<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_metaphone'];

    public function talks()
    {
        return $this->belongsToMany(Talk::class);
    }

    public function getEvents()
    {
        // TODO: Can we make this more efficient?

        $talks = $this->talks()
            ->with('events')
            ->get();

        $events = $talks->map(fn(Talk $talk) => $talk->events)
            ->flatten()
            ->unique(fn(Event $event) => $event->id);

        return $events;
    }
}
