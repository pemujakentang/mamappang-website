<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Seed some sample menus
        $menus = [
            [
                'name' => 'Coklat',
                'category_id' => 1,
                'description' => 'Description for Menu 1',
                'price' => 13000,
            ],
            [
                'name' => 'Coklat Keju',
                'category_id' => 1,
                'description' => 'Description for Menu 1',
                'price' => 13000,
            ],
            [
                'name' => 'Coklat Vanilla',
                'category_id' => 1,
                'description' => 'Description for Menu 1',
                'price' => 13000,
            ],
            [
                'name' => 'Coklat Oreo',
                'category_id' => 1,
                'description' => 'Description for Menu 1',
                'price' => 13000,
            ],
            [
                'name' => 'Coklat Caramel',
                'category_id' => 1,
                'description' => 'Description for Menu 1',
                'price' => 13000,
            ],
            [
                'name' => 'Vanilla',
                'category_id' => 2,
                'description' => 'Description for Menu 2',
                'price' => 13000,
            ],
            [
                'name' => 'Vanilla Keju',
                'category_id' => 2,
                'description' => 'Description for Menu 2',
                'price' => 13000,
            ],
            [
                'name' => 'Vanilla Caramel',
                'category_id' => 2,
                'description' => 'Description for Menu 2',
                'price' => 13000,
            ],
            [
                'name' => 'Vanilla Oreo',
                'category_id' => 2,
                'description' => 'Description for Menu 2',
                'price' => 13000,
            ],
            [
                'name' => 'Strawberry',
                'category_id' => 3,
                'description' => 'Description for Menu 3',
                'price' => 13000,
            ],
            [
                'name' => 'Blueberry',
                'category_id' => 3,
                'description' => 'Description for Menu 3',
                'price' => 13000,
            ]
            // Add more menus as needed
        ];

        // Insert the data into the 'menus' table
        DB::table('menus')->insert($menus);
    }
}
