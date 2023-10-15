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
        // $this->call(RoleTableSeeder::class);
        // $this->call(UsersTableSeeder::class);

        // \App\Models\Role::factory(10)->create();
        \App\Models\User::factory(10)->create();
    }
}
