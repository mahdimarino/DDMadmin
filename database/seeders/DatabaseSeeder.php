<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();
         Listing::create([
            'title'=>'laravel senior devleloper',
            'tags'=>'laravel , javascript',
            'company'=>'majid futaim',
            'location'=>'dubai , uae',
            'email'=>'majid@gmail.com',
            'website'=>'https://www.oracle.com',
            'description'=>'laravel senior devleloper
            laravel senior devleloper
            laravel senior devleloper
             laravel senior devleloper'
         ]);
         Listing::create([
            'title'=>' senior devleloper',
            'tags'=>' javascript',
            'company'=>' futaim',
            'location'=>'dubai ',
            'email'=>'majidaa@gmail.com',
            'website'=>'https://www.google.com',
            'description'=>'javascript senior devleloper
            javascript senior devleloper
            javascript senior devleloper
            javascript senior devleloper'
         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
