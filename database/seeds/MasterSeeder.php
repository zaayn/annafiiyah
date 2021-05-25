<?php

use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master')->insert(['judul' => 'Sejarah']);
        DB::table('master')->insert(['judul' => 'Asas dan Tujuan']);
        DB::table('master')->insert(['judul' => 'Bentuk Pendidikan']);
        DB::table('master')->insert(['judul' => 'Sarana Prasarana']);
    }
}
