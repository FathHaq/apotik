<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukObat extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_produk',
        'kategori_obat',
        'golongan_obat',
        'jenis_produk',
        'nama_obat',
        'kandungan_obat',
        'ukuran',
        'dosis',
        'slug',
        'harga',
        'deskripsi',
        'aturan_pakai',
        'efek_samping',
        'perhatian',
        'foto_obat',
        'stok',
        'status',
    ];

    public function itemproduk()
    {
        return $this->belongsTo(ItemProduk::class, 'item_produk', 'id');
    }
    public function kategoriobat()
    {
        return $this->belongsTo(KategoriObat::class, 'kategori_obat', 'id');
    }
    public function golonganobat()
    {
        return $this->belongsTo(GolonganObat::class, 'golongan_obat', 'id');
    }
    public function jenisproduk()
    {
        return $this->belongsTo(JenisProduk::class, 'jenis_produk', 'id');
    }
}
