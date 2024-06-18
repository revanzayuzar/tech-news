<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'M. Revanza Yuzar',
            'email' => 'revan@gmail.test',
            'password' => 'revan123',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.test',
            'password' => 'admin123',
        ]);
    }
}
