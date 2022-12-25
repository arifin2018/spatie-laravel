<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $column = [
        //     'name' => ''
        // ];

        // $role = [
        //     'admin',
        // ];

        // foreach ($column as $keyColumn => $valueColumn) {
        //     foreach ($role as $keyRole => $value) {
        //         $column[$keyColumn] = $value;
        //         Role::create($column);
        //     }
        // }

        $user = User::find(1);
        $Permission = Permission::find(3);
        // print_r($user);
        $user->givePermissionTo($Permission);
    }
}
