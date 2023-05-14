<?php

namespace App\Services\RolesAndPermissions;

use App\Domain\Core\Enums\CorePermissions;
use App\Services\RolesAndPermissions\Concerns\HasPermissionMap as ConcernsHasPermissionMap;
use App\Services\RolesAndPermissions\Concerns\HasPermissionMap;
use App\Services\RolesAndPermissions\Roles\ManagerRole;

use App\Services\RolesAndPermissions\Roles\SuperAdminRole;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    use ConcernsHasPermissionMap;

    protected array $roles = [
        SuperAdminRole::class,
        ManagerRole::class,
    ];

    protected array $permissions = [
        CorePermissions::class,
    ];

    public function run()
    {
        $this->createPermissions();
        $this->seedRoles();
    }

    private function seedRoles()
    {
        foreach ($this->roles as $role) {
            (new $role())->execute();
        }
    }
}
