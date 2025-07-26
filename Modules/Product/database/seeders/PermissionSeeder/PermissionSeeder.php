<?php

namespace Modules\Product\Database\Seeders\PermissionSeeder;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    public const string MODULE_NAME = 'product';

    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        collect(['-create', '-update', '-read', '-delete', '-upsert'])
            ->crossJoin(collect([
                //
            ]))
            ->map(function ($crudPermission) {
                return static::MODULE_NAME.$crudPermission[1].$crudPermission[0];
            })->each(function (string $permission) {
                Permission::firstOrCreate(['name' => $permission], ['guard_name' => 'api']);
            });
    }
}
