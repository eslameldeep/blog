<?php

namespace App\Services\RolesAndPermissions;

use Spatie\Enum\Enum;

/**
 * @method static self super()
 * @method static self admin()
 * @method static self user()
//  * @method static self doctor()
//  * @method static self patient()
//  * @method static self complex()
 **/
class RolesEnum extends Enum
{
    protected static function values()
    {
        return [
            'super' => 'Super Admin',
            'admin' => 'Admin',
            // 'complex' => 'complex',
            // 'doctor' => 'doctor',
            // 'patient' => 'patient',
            'user'  => 'user',
        ];
    }
}
