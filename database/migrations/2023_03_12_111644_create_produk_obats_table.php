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
        Schema::create('produk_obats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_produk');
            $table->bigInteger('kategori_obat');
            $table->bigInteger('golongan_obat');
            $table->bigInteger('jenis_produk');
            $table->string('nama_obat');
            $table->string('kandungan_obat');
            $table->string('ukuran');
            $table->string('dosis');
            $table->string('slug');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->text('aturan_pakai');
            $table->text('efek_samping');
            $table->text('perhatian');
            $table->string('foto_obat');
            $table->integer('stok')->nullable();
            $table->integer('status')->default(1);
            /**
             * Status :
             * 1 = Tersedia
             * 2 = Penuh
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
        Schema::dropIfExists('produk_obats');
    }
};
