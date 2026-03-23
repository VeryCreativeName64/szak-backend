<?php

namespace Database\Seeders;

use App\Models\Szakdoga;
use Illuminate\Database\Seeder;

class SzakdogaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Szakdoga::factory(10)->create();
    }
}
