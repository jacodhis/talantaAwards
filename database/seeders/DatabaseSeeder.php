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
        // \App\Models\User::factory(10)->create();

        $this->call(superAdmin::class);
        $this->call(artist::class);
        $this->call(payments::class);
        $this->call(roles::class);
        $this->call(events::class);
    }
}
