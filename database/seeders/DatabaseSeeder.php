<?php

namespace Database\Seeders;

use Database\Factories\AuthorFactory;
use App\Models\author;
use App\Models\book;
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
        // \App\Models\User::factory(10)->create();
        Author::factory(5)->create();
        Book::factory(1000)->create();
    }
}
