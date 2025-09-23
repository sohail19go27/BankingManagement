<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WebPage;

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
        WebPage::insert([
            [
                'name' => 'Team',
                'slug' => 'team',
                'html' => '<h1>Meet Our Team</h1>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'About Us',
                'slug' => 'about-us',
                'html' => '<h1>About Our Company</h1>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Contact Us',
                'slug' => 'contact-us',
                'html' => '<h1>Contact Details</h1>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
