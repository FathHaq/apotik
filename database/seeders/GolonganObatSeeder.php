<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GolonganObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('golongan_obats')->insert(array(
            array(
                'golongan_obat'          => 'Bebas Terbatas',
                'slug'                  => 'bebas-terbatas',
            ),
            array(
                'golongan_obat'          => 'Bebas',
                'slug'                  => 'bebas',
            ),
            array(
                'golongan_obat'          => 'Keras',
                'slug'                  => 'keras',
            ),
            array(
                'golongan_obat'          => 'Wajib Apotik',
                'slug'                  => 'wajib-apotik',
            ),
            array(
                'golongan_obat'          => 'Narkotika',
                'slug'                  => 'narkotika',
            ),
            array(
                'golongan_obat'          => 'Psikotropika',
                'slug'                  => 'prikotropika',
            ),
            array(
                'golongan_obat'          => 'Fitofarmaka',
                'slug'                  => 'fitofarmaka',
            ),
            array(
                'golongan_obat'          => 'Herbal Terstandar (OHT)',
                'slug'                  => 'herbal-terstandar',
            ),
            array(
                'golongan_obat'          => 'Herbal',
                'slug'                  => 'herbal',
            ),
        ));
    }
}
