<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Website::create([
            'title' => 'Pets',
            'description' => 'Get info on pets',
        ]);

        Website::create([
            'title' => 'Shoes',
            'description' => 'Get info on shoes',
        ]);

        Website::create([
            'title' => 'Food',
            'description' => 'Get info on food',
        ]);
    }
}
