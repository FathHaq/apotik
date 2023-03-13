<?php

namespace App\Models;

use App\Models\ItemProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaporanDataBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_produk',
        'nama_barang',
        'harga_beli',
        'harga_jual',
        'tanggal_datang',
        'tanggal_expired',
        'jumlah_barang',
        'status',
    ];

    public function itemproduk()
    {
        return $this->belongsTo(ItemProduk::class, 'item_produk', 'id');
    }
}
