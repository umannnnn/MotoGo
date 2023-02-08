<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);

        //create user
        $user = User::create([
            'name' => 'Administrator',
            'email'     => 'usmanpamungkas30@gmail.com',
            'username'     => 'pamungkas',
            'password'  => bcrypt('admin123'),
            'email_verified_at' => Carbon::now()
        ]);

        //get all permissions
        $permissions = Permission::all();

        //get role admin
        $role = Role::find(1);

        //assign permission to role
        $role->syncPermissions($permissions);

        //assign role to user
        $user->assignRole($role);

        //get role leader
        $role = Role::find(2);

        $role->syncPermissions([
            'dashboard.index',
            'dashboard.create',
            'dashboard.edit',
            'dashboard.delete',
        ]);

        Category::create([
            'name' => 'Matic',
            'user_id' => 1,
        ]);
        Category::create([
            'name' => 'Manual',
            'user_id' => 1,
        ]);
        Category::create([
            'name' => 'Sport',
            'user_id' => 1,
        ]);

        // $this->call(SimulationSeeder::class);
    }
}
