<?php

namespace App\Models;

use App\Models\ItemProduk;
use App\Models\JenisProduk;
use App\Models\GolonganObat;
use App\Models\KategoriObat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProdukHerbal extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_produk',
        'kategori_herbal',
        'jenis_produk',
        'nama_herbal',
        'komposisi',
        'berat',
        'slug',
        'harga',
        'deskripsi',
        'cara_pakai',
        'cara_simpan',
        'perhatian',
        'khasiat',
        'foto_herbal',
        'no_bpom',
        'stok',
        'status',
    ];

    public function itemproduk()
    {
        return $this->belongsTo(ItemProduk::class, 'item_produk', 'id');
    }
    public function kategoriherbal()
    {
        return $this->belongsTo(KategoriHerbal::class, 'kategori_herbal', 'id');
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
