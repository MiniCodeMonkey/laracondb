<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', \App\Http\Controllers\OverviewController::class)->name('overview');
Route::get('speakers', \App\Http\Controllers\SpeakersController::class)->name('speakers');
Route::get('speakers/{speaker}', \App\Http\Controllers\SpeakerProfileController::class)->name('speaker');
Route::get('events/{event}', \App\Http\Controllers\EventProfileController::class)->name('event');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
