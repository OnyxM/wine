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
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'firstname' => 'User',
             'lastname' => 'Test',
             'email' => 'test@example.com',
             'priority' => '2'
         ]);

        $this->call(ProductsTableSeeder::class);
    }
}
