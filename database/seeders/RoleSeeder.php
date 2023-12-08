<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'user_management']);
        Permission::create(['name' => 'book_management']);
        Permission::create(['name' => 'member_management']);
        Permission::create(['name' => 'loan_management']);
        Permission::create(['name' => 'return_management']);
        Permission::create(['name' => 'view_books']);
        Permission::create(['name' => 'account_management']);
        Permission::create(['name' => 'profile_management']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('account_management');
        $role->givePermissionTo('profile_management');
        $role->givePermissionTo('user_management');

        $role = Role::create(['name' => 'pustakawan']);
        $role->givePermissionTo('account_management');
        $role->givePermissionTo('profile_management');
        $role->givePermissionTo('book_management');
        $role->givePermissionTo('member_management');
        $role->givePermissionTo('loan_management');
        $role->givePermissionTo('return_management');

        $role = Role::create(['name' => 'anggota']);
        $role->givePermissionTo('account_management');
        $role->givePermissionTo('profile_management');
        $role->givePermissionTo('view_books');
    }
}
