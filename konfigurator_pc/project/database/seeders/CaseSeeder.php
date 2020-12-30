<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('case')->insert([
            'case_id' => '1',
            'name' => 'SilentiumPC Signum SG7V Evo TG ARGB',
            'desc' => '...',
            'price' => 399,
            'type' => 'ATX'
        ]);
        DB::table('case')->insert([
            'case_id' => '2',
            'name' => 'Fractal Design Meshify C TG',
            'desc' => '...',
            'price' => 429,
            'type' => 'ATX'
        ]);
        DB::table('case')->insert([
            'case_id' => '3',
            'name' => 'MSI MAG Forge 100M',
            'desc' => '...',
            'price' => 219,
            'type' => 'ATX'
        ]);
    }
}