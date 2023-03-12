<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriHerbalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_herbals')->insert(array(
            array(
                'kategori_herbal'          => 'Diabetes',
                'slug'                  => 'diabetes',
            ),
            array(
                'kategori_herbal'          => 'Pegel Linu',
                'slug'                  => 'pegel-linu',
            ),
            array(
                'kategori_herbal'          => 'Kencing Manis',
                'slug'                  => 'kencing-manis',
            ),
        ));
    }
}
