<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeds\PermissionsTableSeeder;
use Database\Seeds\CreateAdminUserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionsTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);

    }
}
