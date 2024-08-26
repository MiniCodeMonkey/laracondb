<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Inertia\Inertia;

class EventProfileController extends Controller
{
    public function __invoke(Event $event)
    {
        return Inertia::render('EventProfile', [
            'event' => $event,
            'talks' => $event->talks()->with('speakers')->get(),
        ]);
    }
}
