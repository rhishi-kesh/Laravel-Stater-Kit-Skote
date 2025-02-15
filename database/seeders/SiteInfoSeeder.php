<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteInfo;

class SiteInfoSeeder extends Seeder
{
    public function run(): void
    {
        SiteInfo::factory()->create();
    }
}
