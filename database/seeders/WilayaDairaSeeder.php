<?php

namespace Database\Seeders;

use App\Models\Wilaya;
use Illuminate\Database\Seeder;
use Database\Seeders\DairaSeeder;
use Database\Seeders\WilayaSeeder;

class WilayaDairaSeeder extends Seeder
{

    public function run()
    {
        // $this->call(WilayaSeeder::class);
        $this->call(DairaSeeder::class);
    }
}
