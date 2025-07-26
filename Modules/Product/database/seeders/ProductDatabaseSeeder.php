<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Product\Database\Seeders\PermissionSeeder\PermissionSeeder;

class ProductDatabaseSeeder extends Seeder
{
    public function run(): void
    {
         $this->call([
             PermissionSeeder::class,
         ]);
    }
}
