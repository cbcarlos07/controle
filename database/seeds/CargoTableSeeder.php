<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo')->insert([
            'nm_cargo' => "Developer"
        ]);

        DB::table('cargo')->insert([
            'nm_cargo' => "Analyst"
        ]);

        DB::table('cargo')->insert([
            'nm_cargo' => "Manager Project"
        ]);
    }
}
