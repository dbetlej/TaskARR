<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Core\Database\Seeders\CategoriesDatabaseSeeder;
use Modules\Movie\Database\Seeders\MovieDatabaseSeeder;
use Modules\User\Database\Seeders\UserDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserDatabaseSeeder::class,
            CategoriesDatabaseSeeder::class,
            MovieDatabaseSeeder::class
        ]);
    }
}
