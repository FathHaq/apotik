<?php

namespace App\Http\Controllers\Admin;

use App\Models\ItemProduk;
use App\Models\ProdukObat;
use App\Models\JenisProduk;
use Illuminate\Support\Str;
use App\Models\GolonganObat;
use App\Models\KategoriObat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProdukObatRequest;

class ProdukObatController extends Controller
{
    public function produkObat(){
        $nama_obat = ProdukObat::all();
        $item_produk = ItemProduk::all();
        $kategori_obat = KategoriObat::all();
        $golongan_obat = GolonganObat::all();
        $jenis_produk = JenisProduk::all();

        return view('Admin.ProdukObat.produkobat', [
            'nama_obat'    => $nama_obat,
            'item_produk'    => $item_produk,
            'kategori_obat'    => $kategori_obat,
            'golongan_obat'    => $golongan_obat,
            'jenis_produk'    => $jenis_produk,
        ]);
    }

    public function baruobat(){
        $item_produk = ItemProduk::all();
        $kategori_obat = KategoriObat::all();
        $golongan_obat = GolonganObat::all();
        $jenis_produk = JenisProduk::all();

        return view('Admin.ProdukObat.po-create', [
            'item_produk'  => $item_produk,
            'kategori_obat'    => $kategori_obat,
            'golongan_obat'    => $golongan_obat,
            'jenis_produk'    => $jenis_produk,
        ]);
    }

    public function addobat(ProdukObatRequest $request){
         // dd($request->all());

         ProdukObat::create([
            'item_produk'            => $request->item_produk,
            'jenis_produk'           => $request->jenis_produk,
            'kategori_obat'        => $request->kategori_obat,
            'golongan_obat'            => $request->golongan_obat,
            'nama_obat'       => $request->nama_obat,
            'slug'                   => Str::slug($request->nama_produk),
            'kandungan_obat'                  => $request->kandungan_obat,
            'ukuran'              => $request->ukuran,
            'foto_obat'            => $request->file('foto_obat')->store('img-fotoobat'),
            'dosis'                   => $request->dosis,
            'harga'                   => $request->harga,
            'deskripsi'                   => $request->deskripsi,
            'aturan_pakai'                   => $request->aturan_pakai,
            'efek_samping'                   => $request->efek_samping,
            'perhatian'                   => $request->perhatian,
            'stok'                   => $request->stok,
        ]);

        return redirect()->route('admin.index.po')->with('Ok', "Data $request->nama_obat  berhasil disimpan !");
    }

    public function hapusobat(Request $request)
    {
        // dd($request->all());
        $nama_obat = ProdukObat::findOrFail($request->id);  // Cari data
        Storage::delete($nama_obat->foto_obat); // Hapus file directory system
        $nama_obat->delete(); // Hapus data di database
        return redirect()->back();
    }
}
