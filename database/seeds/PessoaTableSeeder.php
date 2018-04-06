<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert([
            'nm_pessoa'  => "Carlos Bruno Brito",
            'telefone'   => "9295105867",
            'cd_empresa' => 1,
            'cd_setor'   => 1,
            'email'      => 'cbcarlos07@gmail.com',
            'cd_cargo'   => 1,
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('pessoas')->insert([
            'nm_pessoa'  => "Charles Hercules",
            'telefone'   => "9295158866",
            'cd_empresa' => 1,
            'cd_setor'   => 3,
            'email'      => 'charles.h@gmail.com',
            'cd_cargo'   => 3,
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('pessoas')->insert([
            'nm_pessoa'  => "Angela Maria",
            'telefone'   => "9236389053",
            'cd_empresa' => 1,
            'cd_setor'   => 2,
            'email'      => 'angela@gmail.com',
            'cd_cargo'   => 1,
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('pessoas')->insert([
            'nm_pessoa'  => "Maria Ana",
            'telefone'   => "923638810",
            'cd_empresa' => 1,
            'cd_setor'   => 3,
            'email'      => 'maria.ana@gmail.com',
            'cd_cargo'   => 3,
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('pessoas')->insert([
            'nm_pessoa'  => "Paulo Sérgio",
            'telefone'   => "923535885",
            'cd_empresa' => 1,
            'cd_setor'   => 3,
            'email'      => 'paula.sergio@gmail.com',
            'cd_cargo'   => 2,
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
