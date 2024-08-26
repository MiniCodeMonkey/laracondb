<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Inertia\Inertia;

class SpeakerProfileController extends Controller
{
    public function __invoke(Speaker $speaker)
    {
        return Inertia::render('SpeakerProfile', [
            'speaker' => $speaker,
            'talks' => $speaker->talks()->with('events')->get(),
            'events' => $speaker->getEvents(),
        ]);
    }
}
