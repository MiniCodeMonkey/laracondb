<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Inertia\Inertia;

class OverviewController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Overview', [
            'editions' => Event::with('edition')->get()->groupBy(fn(Event $event) => $event->edition_id)->values(),
        ]);
    }
}
