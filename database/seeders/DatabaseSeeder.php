<?php

namespace Database\Seeders;

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
        // <<<<<<< HEAD
        // User::factory(10)->create();
        // =======
        $this->call(DosenSeeder::class);
        // >>>>>>> 010c2a6ff97f6499411f1d6015f5034f2da2491d
    }
}
