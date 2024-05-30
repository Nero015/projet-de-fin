<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Insert dummy user data
        DB::table('users')->insert([
            'role' => 1,
            'email' => 'oussama@oussama.com',
            'password' => Hash::make('password'),
            // Add more fields as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
