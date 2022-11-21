<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();

        \App\Models\Topic::factory(5)->create();
        \App\Models\Tag::factory(5)->create();
        
        \App\Models\Post::factory(40)->create();

        $this->call(
            PostTagSeeder::class,
        );

    }
}
