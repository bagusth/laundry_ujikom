<?php

use Illuminate\Database\Seeder;

class OutletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Outlet::create([
        	'id'  => 1,
        	'nama' => 'Toko Palsu',
        	'alamat' => 'Dirahasiakan',
        	'tlp' => '000000000000000'
		]);
    }
}
