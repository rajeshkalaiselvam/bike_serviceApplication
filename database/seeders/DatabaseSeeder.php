<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'mobile' => '965528859',
            'role_id' => '2',
            'password' => Hash::make("Test@123"),
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'mobile' => '965528359',
            'role_id' => '1',
            'password' => Hash::make("Admin@123"),
        ]);
        Service::factory()->create([
            'title' => 'Oil Change',
            'description' => 'An oil change is a routine maintenance service performed on a vehicle engine to ensure optimal performance and longevity. During an oil change, the old engine oil is drained and replaced with fresh, clean oil.',
        ]); 
        Service::factory()->create([
            'title' => 'General check up & Service',
            'description' => 'A "General Service & Checkup" typically refers to a routine maintenance procedure performed on a vehicle, machinery, or equipment to ensure its optimal functioning, reliability, and safety.',
        ]); 
        Service::factory()->create([
            'title' => 'Water Service',
            'description' => 'A "Water Service" typically refers to a maintenance procedure or a utility service related to the supply and management of water.',
        ]); 
    }
}
