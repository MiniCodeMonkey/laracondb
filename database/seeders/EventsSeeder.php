<?php

namespace Database\Seeders;

use App\Models\Edition;
use App\Models\Event;
use Illuminate\Database\Seeder;
use MatanYadaev\EloquentSpatial\Objects\Point;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $edition = Edition::where('name', 'Laracon US')->first();

        $event = new Event();
        $event->year = 2013;
        $event->location = 'Washington DC';
        $event->coordinates = new Point(38.911936, -77.016719);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2014;
        $event->location = 'New York City';
        $event->coordinates = new Point(40.750422, -73.996328);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2015;
        $event->location = 'Lousville, KY';
        $event->coordinates = new Point(38.25247, -85.753812);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2016;
        $event->location = 'Lousville, KY';
        $event->coordinates = new Point(38.25247, -85.753812);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2017;
        $event->location = 'New York City';
        $event->coordinates = new Point(40.750422, -73.996328);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2018;
        $event->location = 'Chicago, IL';
        $event->coordinates = new Point(41.88531, -87.62213);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2019;
        $event->location = 'New York City';
        $event->coordinates = new Point(40.750422, -73.996328);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2023;
        $event->location = 'Nashville, TN';
        $event->coordinates = new Point(36.165688, -86.778098);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2024;
        $event->location = 'Dallas, TX';
        $event->coordinates = new Point(32.781179, -96.790329);
        $edition->events()->save($event);

        $edition = Edition::where('name', 'Laracon EU')->first();

        $event = new Event();
        $event->year = 2013;
        $event->location = 'Amsterdam, NL';
        $event->coordinates = new Point(52.3825, 4.9001);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2014;
        $event->location = 'Amsterdam, NL';
        $event->coordinates = new Point(52.3825, 4.9001);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2015;
        $event->location = 'Amsterdam, NL';
        $event->coordinates = new Point(52.3825, 4.9001);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2016;
        $event->location = 'Amsterdam, NL';
        $event->coordinates = new Point(52.3825, 4.9001);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2017;
        $event->location = 'Amsterdam, NL';
        $event->coordinates = new Point(52.3825, 4.9001);
        $edition->events()->save($event);

        $event = new Event();
        $event->year = 2018;
        $event->location = 'Amsterdam, NL';
        $event->coordinates = new Point(52.3825, 4.9001);
        $edition->events()->save($event);

        // TODO add 2019-2023 Laracon EU events
        $event = new Event();
        $event->year = 2024;
        $event->location = 'Amsterdam, NL';
        $event->coordinates = new Point(52.3825, 4.9001);
        $edition->events()->save($event);
    }
}
