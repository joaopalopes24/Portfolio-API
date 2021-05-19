<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'full_name'     => 'Nome do Administrador',
            'email'         => 'administrador@exemplo.com',
            'password'      => bcrypt('12345678'),
            'cpf'           => '111.111.111-11',
            'birthday'      => '2000-01-01',
        ]);
    }
}