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
        $this->call(CountrySeeder::class);
        \App\Models\City::factory(10)->create();
        \App\Models\Shop::factory(100)->create();
        \App\Models\User::factory(1000)->create();
    }
}
