<?php

namespace Database\Seeders;

use App\Models\timeTrack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeTrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        timeTrack::factory()->count(10)->create();
    }
}
