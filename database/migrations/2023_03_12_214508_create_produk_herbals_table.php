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
        Schema::create('produk_herbals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_produk');
            $table->bigInteger('kategori_herbal');
            $table->bigInteger('jenis_produk');
            $table->string('nama_herbal');
            $table->string('komposisi');
            $table->string('berat');
            $table->string('slug');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->text('cara_pakai');
            $table->text('cara_simpan');
            $table->text('khasiat');
            $table->text('perhatian')->nullable();
            $table->string('foto_herbal');
            $table->integer('stok')->nullable();
            $table->integer('no_bpom')->nullable();
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
        Schema::dropIfExists('produk_herbals');
    }
};
