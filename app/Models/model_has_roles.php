<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class model_has_roles extends Model
{
    use HasFactory;
    protected $table = 'model_has_roles';

    public function roles()
    {
        // ('roles', 'model_has_roles.role_id', '=', 'roles.id')
        return $this->hasMany(Role::class, 'id', 'role_id');
    }
}
