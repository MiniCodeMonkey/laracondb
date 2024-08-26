<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use MatanYadaev\EloquentSpatial\Objects\Point;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $editionId = DB::table('editions')->where('name', 'Laracon US')->value('id');

        DB::table('events')->insert([
            [
                'edition_id' => $editionId,
                'year' => 2013,
                'location' => 'Washington DC',
                'coordinates' => new Point(38.911936, -77.016719),
            ],
            [
                'edition_id' => $editionId,
                'year' => 2014,
                'location' => 'New York City',
                'coordinates' => new Point(40.750422, -73.996328),
            ],
            [
                'edition_id' => $editionId,
                'year' => 2015,
                'location' => 'Lousville, KY',
                'coordinates' => new Point(38.25247, -85.753812),
            ],
            [
                'edition_id' => $editionId,
                'year' => 2016,
                'location' => 'Lousville, KY',
                'coordinates' => new Point(38.25247, -85.753812),
            ],
            [
                'edition_id' => $editionId,
                'year' => 2017,
                'location' => 'New York City',
                'coordinates' => new Point(40.750422, -73.996328),
            ],
            [
                'edition_id' => $editionId,
                'year' => 2018,
                'location' => 'Chicago, IL',
                'coordinates' => new Point(41.88531, -87.62213),
            ],
            [
                'edition_id' => $editionId,
                'year' => 2019,
                'location' => 'New York City',
                'coordinates' => new Point(40.750422, -73.996328),
            ],
            [
                'edition_id' => $editionId,
                'year' => 2023,
                'location' => 'Nashville, TN',
                'coordinates' => new Point(36.165688, -86.778098),
            ],
            [
                'edition_id' => $editionId,
                'year' => 2024,
                'location' => 'Dallas, TX',
                'coordinates' => new Point(32.781179, -96.790329),
            ]
        ]);
    }
}
