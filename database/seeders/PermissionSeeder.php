<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $column = [
            'name' => ''
        ];

        $Permission = [
            'read role',
            'create role',
            'update role',
            'delete role',
        ];

        foreach ($column as $keyColumn => $valueColumn) {
            foreach ($Permission as $keyPermission => $value) {
                $column[$keyColumn] = $value;
                Permission::create($column);
            }
        }
    }
}
