<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Services\RolesAndPermissions\RolesEnum;
use App\Services\RolesAndPermissions\RolesSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->setupUsers();   
    }


    private function setupUsers()
    {
        User::updateOrCreate(['email' => 'eslameldeep@gmail.com'], [
            'phone'     => '+21118489000',
            'name'     => 'Administrator',
            'password' => Hash::make('123456'),
        ])->assignRole(RolesEnum::super()->value);
        echo 'Admins Created Successfully'.PHP_EOL;
    }
}
