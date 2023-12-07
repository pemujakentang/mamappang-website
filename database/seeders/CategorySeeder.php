<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Seed some sample categories
        $categories = [
            ['name' => 'Coklat'],
            ['name' => 'Vanilla'],
            ['name' => 'Others'],
            // Add more categories as needed
        ];

        // Insert the data into the 'categories' table
        DB::table('categories')->insert($categories);
    }
}
