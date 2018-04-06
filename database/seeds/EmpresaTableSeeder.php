<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa')->insert([
            'nm_empresa' => "Digiboard"
        ]);
    }
}
