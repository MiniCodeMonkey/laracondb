<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Inertia\Inertia;

class SpeakersController extends Controller
{
    public function __invoke()
    {
        $speakers = Speaker::withCount('talks')
            ->get()
            ->groupBy('talks_count')
            ->sortKeysDesc();

        return Inertia::render('Speakers', [
            'speakersByTalksCount' => $speakers,
        ]);
    }
}
