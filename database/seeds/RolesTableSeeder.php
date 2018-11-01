<?php

use App\User;
use Illuminate\Database\Seeder;
use jeremykenedy\LaravelRoles\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Add Roles
         *
         */
        if (Role::where('slug', '=', 'owner')->first() === null) {
            $adminRole = Role::create([
                'name'        => 'Owner',
                'slug'        => 'owner',
                'description' => 'Owner Role',
                'level'       => 99,
            ]);
        }

		if (Role::where('slug', '=', 'admin')->first() === null) {
            $adminRole = Role::create([
                'name'        => 'Admin',
                'slug'        => 'admin',
                'description' => 'Admin Role',
                'level'       => 98,
            ]);
        }

        if (Role::where('slug', '=', 'manager')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Manager',
                'slug'        => 'manager',
                'description' => 'Manager Role',
                'level'       => 70,
            ]);
        }


        if (Role::where('slug', '=', 'staff')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Staff',
                'slug'        => 'staff',
                'description' => 'Staff Role',
                'level'       => 50,
            ]);
        }


        if (Role::where('slug', '=', 'user')->first() === null) {
            $userRole = Role::create([
                'name'        => 'User',
                'slug'        => 'user',
                'description' => 'User Role',
                'level'       => 1,
            ]);
        }

        if (Role::where('slug', '=', 'unverified')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Unverified',
                'slug'        => 'unverified',
                'description' => 'Unverified Role',
                'level'       => 0,
            ]);
        }
    }
}
