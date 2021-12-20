<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\System;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        System::create([
            'id' => '1',
            'title' => 'SIM LAB',
            'desc' => 'Ini Description SIM LAB'
        ]);
        System::create([
            'id' => '2',
            'title' => 'SIMAK',
            'desc' => 'Ini Description SIMAK'
        ]);
        System::create([
            'id' => '3',
            'title' => 'SISAKTI',
            'desc' => 'Ini Description SISAKTI'
        ]);
        System::create([
            'id' => '4',
            'title' => 'SIM-DOS',
            'desc' => 'Ini Description SIM-DOS'
        ]);
        System::create([
            'id' => '5',
            'title' => 'OASE',
            'desc' => 'OASE Description'
        ]);
    }
}
