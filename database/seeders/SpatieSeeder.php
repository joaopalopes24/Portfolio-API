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
            'name'       => 'Administrador Master',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([
            'name'       => 'Visitante',
            'guard_name' => 'web',
        ]);

        DB::table('model_has_roles')->insert([
            'role_id'    => '1',
            'model_type' => 'App\Models\Admin',
            'model_id'   => '1',
        ]);

        /* Página Inicial */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Visualizar Página Inicial'),
            'full_name'   => 'Visualizar Página Inicial',
            'description' => 'Visualizar os dados da página inicial.',
            'guard_name' => 'web',
        ]);

        /* Logs */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Visualizar Logs do Sistema'),
            'full_name'   => 'Visualizar Logs do Sistema',
            'description' => 'Visualizar todos os logs do sistema envolvendo alterações de dados.',
            'guard_name' => 'web',
        ]);

        /* Pacientes */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Visualizar Pacientes'),
            'full_name'   => 'Visualizar Pacientes',
            'description' => 'Visualizar todos os pacientes do sistema (foto, nome, nome da mãe, data de nascimento, CPF, CNS e endereço).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Cadastrar Pacientes'),
            'full_name'   => 'Cadastrar Pacientes',
            'description' => 'Cadastrar os pacientes do sistema (foto, nome, nome da mãe, data de nascimento, CPF, CNS e endereço).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Editar Pacientes'),
            'full_name'   => 'Editar Pacientes',
            'description' => 'Editar os pacientes do sistema (foto, nome, nome da mãe, data de nascimento, CPF, CNS e endereço).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Deletar Pacientes'),
            'full_name'   => 'Deletar Pacientes',
            'description' => 'Deletar os pacientes do sistema (foto, nome, nome da mãe, data de nascimento, CPF, CNS e endereço).',
            'guard_name' => 'web',
        ]);

        /* Administradores */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Visualizar Administradores'),
            'full_name'   => 'Visualizar Administradores',
            'description' => 'Visualizar todos os administradores do sistema (nome, CPF, e-mail e data de aniversário).',
            'guard_name' => 'web',
        ]);
        
        DB::table('permissions')->insert([
            'name'        => Str::slug('Cadastrar Administradores'),
            'full_name'   => 'Cadastrar Administradores',
            'description' => 'Cadastrar os administradores do sistema (nome, CPF, e-mail e data de aniversário).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Editar Administradores'),
            'full_name'   => 'Editar Administradores',
            'description' => 'Editar os administradores do sistema (nome, CPF, e-mail e data de aniversário).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Deletar Administradores'),
            'full_name'   => 'Deletar Administradores',
            'description' => 'Deletar os administradores do sistema (nome, CPF, e-mail e data de aniversário).',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Visualizar e Alterar Permissões dos Administradores'),
            'full_name'   => 'Visualizar e Alterar Permissões dos Administradores',
            'description' => 'Visualizar e alterar permissões de cada administrador separadamente.',
            'guard_name' => 'web',
        ]);

        /* Perfis */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Visualizar Perfis'),
            'full_name'   => 'Visualizar Perfis',
            'description' => 'Visualizar todos os Perfis do sistema.',
            'guard_name' => 'web',
        ]);
        
        DB::table('permissions')->insert([
            'name'        => Str::slug('Cadastrar Perfis'),
            'full_name'   => 'Cadastrar Perfis',
            'description' => 'Cadastrar os Perfis do sistema.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Editar Perfis'),
            'full_name'   => 'Editar Perfis',
            'description' => 'Editar os Perfis do sistema.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Deletar Perfis'),
            'full_name'   => 'Deletar Perfis',
            'description' => 'Deletar os Perfis do sistema.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Visualizar e Alterar Permissões do Perfil'),
            'full_name'   => 'Visualizar e Alterar Permissões do Perfil',
            'description' => 'Visualizar e alterar permissões de cada perfil separadamente.',
            'guard_name' => 'web',
        ]);

        /* Permissões */
        DB::table('permissions')->insert([
            'name'        => Str::slug('Visualizar Permissões'),
            'full_name'   => 'Visualizar Permissões',
            'description' => 'Visualizar todos as permissões do sistema.',
            'guard_name' => 'web',
        ]);
        
        DB::table('permissions')->insert([
            'name'        => Str::slug('Cadastrar Permissões'),
            'full_name'   => 'Cadastrar Permissões',
            'description' => 'Cadastrar as permissões do sistema.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Editar Permissões'),
            'full_name'   => 'Editar Permissões',
            'description' => 'Editar as permissões do sistema.',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name'        => Str::slug('Deletar Permissões'),
            'full_name'   => 'Deletar Permissões',
            'description' => 'Deletar as permissões do sistema.',
            'guard_name' => 'web',
        ]);
        
        /* RoleHasPermissions */
        for ($i = 1; $i <= 20; $i++) {
            DB::table('role_has_permissions')->insert([
                'role_id' => '1',
                'permission_id' => $i,
            ]);
        }

        DB::table('role_has_permissions')->insert([
            'role_id' => '2',
            'permission_id' => 1,
        ]);
    }
}