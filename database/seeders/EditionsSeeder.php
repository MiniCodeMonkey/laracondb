<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('editions')->insert([
            [
                'name' => 'Laracon EU',
                'region' => 'EU',
            ],
            [
                'name' => 'Laracon US',
                'region' => 'US',
            ],
            [
                'name' => 'Laracon AU',
                'region' => 'OC',
            ],
            [
                'name' => 'Laracon IN',
                'region' => 'AS',
            ],
            [
                'name' => 'Laravel Live UK',
                'region' => 'UK',
            ],
            [
                'name' => 'Laravel Live DK',
                'region' => 'DK',
            ]
        ]);
    }
}
