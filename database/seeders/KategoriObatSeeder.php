<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_obats')->insert(array(
            array(
                'kategori_obat'          => 'Diare',
                'slug'                  => 'diare',
            ),
            array(
                'kategori_obat'          => 'Pilek',
                'slug'                  => 'pilek',
            ),
            array(
                'kategori_obat'          => 'Batuk',
                'slug'                  => 'batuk',
            ),
            array(
                'kategori_obat'          => 'Demam',
                'slug'                  => 'demam',
            ),
        ));
    }
}
