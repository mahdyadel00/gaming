<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeds\PermissionsTableSeeder;
use Database\Seeds\CreateAdminUserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            CreateAdminUserSeeder::class,
        ]);
    }
}
