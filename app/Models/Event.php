<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Objects\Point;

class Event extends Model
{
    use HasFactory;

    protected $with = ['edition'];

    protected $casts = [
        'coordinates' => Point::class,
    ];

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }

    public function talks()
    {
        return $this->belongsToMany(Talk::class);
    }

    public function getSpeakers()
    {
        $talks = $this->talks()->with('speakers')->get();

        return $talks->map(fn(Talk $talk) => $talk->speakers)
            ->flatten()
            ->unique(fn(Speaker $speaker) => $speaker->id);
    }
}
