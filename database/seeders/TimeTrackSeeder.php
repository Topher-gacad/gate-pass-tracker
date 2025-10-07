<?php

namespace Database\Seeders;

use App\Models\TimeTrack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeTrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TimeTrack::factory()->count(10)->create();
    }
}
