<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::factory()->create([
            'key' => 'commission_percent',
            'value' => 5,
        ]);
        Settings::factory()->create([
            'key' => 'about_us',
        ]);
    }
}
