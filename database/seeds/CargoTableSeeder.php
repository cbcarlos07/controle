<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
            'ds_cargo'    => "Developer",
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        DB::table('cargo')->insert([
            'ds_cargo' => "Analyst",
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('cargo')->insert([
            'ds_cargo' => "Manager Project",
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
