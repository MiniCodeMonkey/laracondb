<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_metaphone'];

    public function talks() {
        return $this->belongsToMany(Talk::class);
    }
}
