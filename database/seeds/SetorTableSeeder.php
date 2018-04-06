<?php

use Illuminate\Database\Seeder;

class SetorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setor')->insert([
            'nm_setor' => "Tecnologia de Informação"
        ]);

        DB::table('setor')->insert([
            'nm_setor' => "Central de Monitoramento"
        ]);

        DB::table('setor')->insert([
            'nm_setor' => "Gerencia"
        ]);
    }
}
