<?php

namespace App\Services\RolesAndPermissions\Roles;

use App\Domain\Core\Enums\CorePermissions;
use App\Services\RolesAndPermissions\Concerns\HasPermissionMap;
use App\Services\RolesAndPermissions\RolesEnum;
use Spatie\Permission\Models\Role;

class DoctorRole
{
    use HasPermissionMap;

    protected array $permissions = [
        CorePermissions::class,
    ];

    public function execute()
    {
        /** @var Role $role */
        $role = Role::updateOrCreate(['name' => RolesEnum::doctor()->value, 'guard_name' => 'web']);
        $role->givePermissionTo($this->getPermissionNames());
    }
}
