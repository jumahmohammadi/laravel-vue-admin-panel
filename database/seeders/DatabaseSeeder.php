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
        $user1 = \App\Models\User::factory()->create([
            'email' => 'admin@gmail.com',
        ]);

    }
}
