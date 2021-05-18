<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SpatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'       => 'Master Administrator',
            'guard_name' => 'web',
        ]);

        DB::table('model_has_roles')->insert([
            'role_id'    => '1',
            'model_type' => 'App\Models\Admin',
            'model_id'   => '1',
        ]);
        
        /* Home Page */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Show Home'),
            'full_name'   => 'Show Home',
            'description' => 'Show all detailed system.',
            'guard_name' => 'web',
        ]);

        /* --------------- GERECIAMENTO DE USUÁRIOS --------------- */

        /* Logs */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Show System Logs'),
            'full_name'   => 'Show System Logs',
            'description' => 'Show all system logs involving data changes.',
            'guard_name' => 'web',
        ]);

        /* Patients */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Show Patients'),
            'full_name'   => 'Show Patients',
            'description' => 'Show all system patients (photo, name, mother_name, birthday, CPF, CNS and adress).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Create Patients'),
            'full_name'   => 'Create Patients',
            'description' => 'Create system patients (photo, name, mother_name, birthday, CPF, CNS and adress).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Edit Patients'),
            'full_name'   => 'Edit Patients',
            'description' => 'Edit system patients (photo, name, mother_name, birthday, CPF, CNS and adress).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Delete Patients'),
            'full_name'   => 'Delete Patients',
            'description' => 'Delete system patients (photo, name, mother_name, birthday, CPF, CNS and adress).',
            'guard_name' => 'web',
        ]);

        /* Administrators */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Show Administrators'),
            'full_name'   => 'Show Administrators',
            'description' => 'Show all system administrators (name, CPF, email and birthday).',
            'guard_name' => 'web',
        ]);
        
        DB::table('permissions')->insert([
            'name'        => Str::slug('Create Administrators'),
            'full_name'   => 'Create Administrators',
            'description' => 'Create system administrators (name, CPF, email and birthday).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Edit Administrators'),
            'full_name'   => 'Edit Administrators',
            'description' => 'Edit system administrators (name, CPF, email and birthday).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Delete Administrators'),
            'full_name'   => 'Delete Administrators',
            'description' => 'Delete system administrators (name, CPF, email and birthday).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Show and Edit Permissions for Administrators'),
            'full_name'   => 'Show and Edit Permissions for Administrators',
            'description' => 'Show and edit permissions of each administrator separately.',
            'guard_name' => 'web',
        ]);

        /* Roles */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Show Roles'),
            'full_name'   => 'Show Roles',
            'description' => 'Show all system roles.',
            'guard_name' => 'web',
        ]);
        
        DB::table('permissions')->insert([
            'name'        => Str::slug('Create Roles'),
            'full_name'   => 'Create Roles',
            'description' => 'Create system roles.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Edit Roles'),
            'full_name'   => 'Edit Roles',
            'description' => 'Edit system roles.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Delete Roles'),
            'full_name'   => 'Delete Roles',
            'description' => 'Delete system roles.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Show and Edit Permissions for Roles'),
            'full_name'   => 'Show and Edit Permissions for Roles',
            'description' => 'Show and edit permissions of each role separately.',
            'guard_name' => 'web',
        ]);

        /* Permissions */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Show Permissions'),
            'full_name'   => 'Show Permissions',
            'description' => 'Show all system permissions.',
            'guard_name' => 'web',
        ]);
        
        DB::table('permissions')->insert([
            'name'        => Str::slug('Create Permissions'),
            'full_name'   => 'Create Permissions',
            'description' => 'Create system permissions.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Edit Permissions'),
            'full_name'   => 'Edit Permissions',
            'description' => 'Edit system permissions.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Delete Permissions'),
            'full_name'   => 'Delete Permissions',
            'description' => 'Delete system permissions.',
            'guard_name' => 'web',
        ]);

        /* RoleHasPermissions */
        for ($i = 1; $i <= 20; $i++) {
            DB::table('role_has_permissions')->insert([
                'role_id' => '1',
                'permission_id' => $i,
            ]);
        }
    }
}