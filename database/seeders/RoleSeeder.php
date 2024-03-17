<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create([
            'name' => 'Admin',
            'description' => 'Administrador',
        ]);

        $userRole = Role::create([
            'name' => 'User',
            'description' => 'Usuario',
        ]);

        $guest = Role::create([
            'name' => 'Guest',
            'description' => 'Invitado',
        ]);

        $roles = [
            [
                'name' => 'Account Manager',
                'description' => 'Contador'
            ],
            [
                'name' => 'Seller',
                'description' => 'Vendedor'
            ],
            [
                'name' => 'Community Manager',
                'description' => 'Administrador de Comunidad'
            ],
        ];

        Role::insert($roles);

        $user = User::find(1);
        $user->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
        $user->roles()->attach($guest);

        $user = User::find(2);
        $user->roles()->attach($userRole);
        $user->roles()->attach($guest);







    }
}
