<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_produks')->insert(array(
            array(
                'item_produk'          => 'Obat Resep',
                'slug'                  => 'obat-resep',
            ),
            array(
                'item_produk'          => 'Obat Bebas',
                'slug'                  => 'obat-bebas',
            ),
            array(
                'item_produk'          => 'Vitamin',
                'slug'                  => 'vitamin',
            ),
            array(
                'item_produk'          => 'Suplemet',
                'slug'                  => 'suplement',
            ),
            array(
                'item_produk'          => 'Herbal',
                'slug'                  => 'herbal',
            ),
            array(
                'item_produk'          => 'Personal Care',
                'slug'                  => 'personal-care',
            ),
            array(
                'item_produk'          => 'Beauty Care',
                'slug'                  => 'beauty-care',
            ),
            array(
                'item_produk'          => 'Skin Care',
                'slug'                  => 'skin-care',
            ),
        ));
    }
}
