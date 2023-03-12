<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_produks')->insert(array(
            array(
                'jenis_produk'          => 'Kapsul',
                'slug'                  => 'kapsul',
            ),
            array(
                'jenis_produk'          => 'Table',
                'slug'                  => 'table',
            ),
            array(
                'jenis_produk'          => 'Serbuk',
                'slug'                  => 'serbuk',
            ),
            array(
                'jenis_produk'          => 'Sirup',
                'slug'                  => 'sirup',
            ),
        ));
    }
}
