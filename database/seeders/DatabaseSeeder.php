<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(MenuSeeder::class);
        User::create([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => 'admin123',
            'role' => 0,
            'no_telp' => '0',
            'remember_token' => 'admin'
        ]);
    }
}
