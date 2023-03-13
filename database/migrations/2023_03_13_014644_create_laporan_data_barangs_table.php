<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_data_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('item_produk');
            $table->text('nama_barang');
            $table->string('harga_beli');
            $table->string('harga_jual');
            $table->string('tanggal_datang');
            $table->string('tanggal_expired');
            $table->string('jumlah_barang');
            $table->integer('status')->default(1);
            /**
             * Status :
             * 1 = Tersedia
             * 2 = Habis
             */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_data_barangs');
    }
};
