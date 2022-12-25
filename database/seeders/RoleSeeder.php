<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        try {

        $column = [
            'name' => ''
        ];

        $role = [
            'admin',
            'staff',
            'spv',
            'manager',
        ];

        foreach ($column as $keyColumn => $valueColumn) {
            foreach ($role as $keyRole => $value) {
                $column[$keyColumn] = $value;
                Role::create($column);
            }
        }

        $user = User::find(1);
        $role = Role::find(1);
        $user->assignRole($role);
        $Permission = Permission::find(3);
        $role->givePermissionTo($Permission);
        DB::commit();
        }
        catch (\Throwable $th) {
        DB::rollBack();
        }
    }
}
