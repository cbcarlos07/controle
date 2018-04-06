<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
            'nm_setor' => "Tecnologia de Informação",
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('setor')->insert([
            'nm_setor' => "Central de Monitoramento",
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('setor')->insert([
            'nm_setor' => "Gerencia",
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
