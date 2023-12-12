<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $prices = [
            [
                'name' => 'under20',
                'price' => 12000,
                'description' => '<=20 pcs'
            ],
            [
                'name' => 'under50',
                'price' => 11000,
                'description' => '<=50 pcs'
            ],
            [
                'name' => 'over50',
                'price' => 10000,
                'description' => '>50 pcs'
            ],
        ];
        
        DB::table('prices')->insert($prices);
    }
}
