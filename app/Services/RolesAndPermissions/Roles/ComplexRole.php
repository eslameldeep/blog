<?php

namespace App\Services\RolesAndPermissions\Roles;

use App\Domain\Core\Enums\ComplexPermissions;
use App\Services\RolesAndPermissions\Concerns\HasPermissionMap;
use App\Services\RolesAndPermissions\RolesEnum;
use Spatie\Permission\Models\Role;

class ComplexRole
{
    use HasPermissionMap;

    protected array $permissions = [
        ComplexPermissions::class,
    ];

    public function execute()
    {
        /** @var Role $role */
        $role = Role::updateOrCreate(['name' => RolesEnum::complex()->value, 'guard_name' => 'web']);
        $role->givePermissionTo($this->getPermissionNames());
    }
}
