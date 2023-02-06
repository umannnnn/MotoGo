<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //permission tim
        Permission::create(['name' => 'dashboard.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.delete', 'guard_name' => 'web']);

        Permission::create(['name' => 'penyewa.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'penyewa.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'penyewa.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'penyewa.delete', 'guard_name' => 'web']);

        //permission permissions
        Permission::create(['name' => 'permissions.index', 'guard_name' => 'web']);
    }
}
