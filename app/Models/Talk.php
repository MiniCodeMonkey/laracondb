<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    use HasFactory;

    public function speakers() {
        return $this->belongsToMany(Speaker::class, 'talks_speakers');
    }
}
