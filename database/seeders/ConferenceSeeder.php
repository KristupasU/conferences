<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\Conference;
use Illuminate\Support\Facades\DB;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conferences')->insert([[
                'user_id' => 1,
                'title' => Lorem::sentence(6),
                'description' => Lorem::text(),
                'location' => 'Vilnius',
                'start_time' => now(),
                'end_time' => now()->addHours(3),
            ],
            [
                'user_id' => 1,
                'title' => Lorem::sentence(6),
                'description' => Lorem::text(),
                'location' => 'Kaunas',
                'start_time' => now(),
                'end_time' => now()->addHours(3),
            ],
            [
                'user_id' => 1,
                'title' => Lorem::sentence(6),
                'description' => Lorem::text(),
                'location' => 'Panevėžys',
                'start_time' => now(),
                'end_time' => now()->addHours(3),
            ],
        ]);
    }

}
