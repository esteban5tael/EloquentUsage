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
        // $user->roles()->attach($adminRole);
        // $user->roles()->attach($userRole);
        // $user->roles()->attach($guest);
        // $user->roles()->sync([
        //     $userRole->id=>["status",false]
        // ]);
        $user->roles()->sync([
            $adminRole->id => ['status' => true],
            $userRole => ['status' => true],
            $guest => ['status' => true],
        ]);

        $user = User::find(2);
        $user->roles()->sync([
            $adminRole->id => ['status' => false],
            $userRole->id => ['status' => true],
            $guest->id => ['status' => true],
        ]);

        $roles = Role::all();

        // Obtener todos los usuarios excepto los dos primeros (que ya tienen roles asignados)
        $users = User::whereNotIn('id', [1, 2])->get();

        // Para cada usuario, asignar roles de manera aleatoria con un estado aleatorio
        foreach ($users as $user) {
            $userRoles = $roles->random(rand(1, $roles->count())); // Seleccionar roles aleatorios
            foreach ($userRoles as $role) {
                $user->roles()->attach($role->id, ['status' => rand(0, 1)]);
            }
        }
    }
}
