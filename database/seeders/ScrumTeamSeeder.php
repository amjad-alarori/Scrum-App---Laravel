<?php

namespace Database\Seeders;

use App\Models\ScrumTeam;
use Illuminate\Database\Seeder;

class ScrumTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScrumTeam::factory()->count(180)->create();
    }
}
