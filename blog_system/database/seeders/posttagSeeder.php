<?php

namespace Database\Seeders;

use App\Models\Posttag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class posttagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posttag::factory()->count(20)->create();

    }
}
