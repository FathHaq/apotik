<?php

namespace App\Http\Controllers\Admin;

use App\Models\ItemProduk;
use App\Models\JenisProduk;
use Illuminate\Support\Str;
use App\Models\Produkherbal;
use Illuminate\Http\Request;
use App\Models\Golonganherbal;
use App\Models\KategoriHerbal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProdukherbalRequest;

class ProdukHerbalController extends Controller
{
    public function produkherbal()
    {
        $nama_herbal = Produkherbal::all();
        $item_produk = ItemProduk::all();
        $kategori_herbal = Kategoriherbal::all();
        $jenis_produk = JenisProduk::all();

        return view('Admin.ProdukHerbal.produkherbal', [
            'nama_herbal'    => $nama_herbal,
            'item_produk'    => $item_produk,
            'kategori_herbal'    => $kategori_herbal,
            'jenis_produk'    => $jenis_produk,
        ]);
    }

    public function baruherbal()
    {
        $item_produk = ItemProduk::all();
        $kategori_herbal = KategoriHerbal::all();
        $jenis_produk = JenisProduk::all();

        return view('Admin.ProdukHerbal.ph-create', [
            'item_produk'  => $item_produk,
            'kategori_herbal'    => $kategori_herbal,
            'jenis_produk'    => $jenis_produk,
        ]);
    }

    public function addherbal(ProdukHerbalRequest $request)
    {
        // dd($request->all());

        Produkherbal::create([
            'item_produk'            => $request->item_produk,
            'jenis_produk'           => $request->jenis_produk,
            'kategori_herbal'        => $request->kategori_herbal,
            'nama_herbal'       => $request->nama_herbal,
            'slug'                   => Str::slug($request->nama_herbal),
            'komposisi'                  => $request->komposisi,
            'berat'              => $request->berat,
            'foto_herbal'            => $request->file('foto_herbal')->store('img-fotoherbal'),
            'cara_pakai'                   => $request->cara_pakai,
            'cara_simpan'                   => $request->cara_simpan,
            'no_bpom'                   => $request->no_bpom,
            'harga'                   => $request->harga,
            'deskripsi'                   => $request->deskripsi,
            'khasiat'                   => $request->khasiat,
            'perhatian'                   => $request->perhatian,
            'stok'                   => $request->stok,
        ]);

        return redirect()->route('admin.index.ph')->with('Ok', "Data $request->nama_herbal  berhasil disimpan !");
    }

    public function hapusherbal(Request $request)
    {
        // dd($request->all());
        $nama_herbal = Produkherbal::findOrFail($request->id);  // Cari data
        Storage::delete($nama_herbal->foto_herbal); // Hapus file directory system
        $nama_herbal->delete(); // Hapus data di database
        return redirect()->back();
    }

    public function detailherbal($id)
    {
        $item_produk = ItemProduk::all();
        $kategori_herbal = KategoriHerbal::all();
        $jenis_produk = JenisProduk::all();

        $nama_herbal = Produkherbal::findOrFail($id);
        return view('Admin.ProdukHerbal.produkherbal', [
            'nama_herbal'    => $nama_herbal,
            'item_produk'    => $item_produk,
            'kategori_herbal'    => $kategori_herbal,
            'jenis_produk'    => $jenis_produk,
        ]);
    }

    public function updateherbal(Request $request, $id)
    {
        // dd($request->all());


        $nama_herbal = Produkherbal::findOrFail($id);
        //Proses Ubah datanya


        if ($request->hasFile('image')) {

            //upload new image
            $foto_herbal = $request->file('foto_herbal');
            $foto_herbal->storeAs('public/images', $foto_herbal->hashName());

            //delete old image
            Storage::delete('public/images/' . $nama_herbal->foto_herbal);

            //update post with new image
            $nama_herbal->update([
                'foto_herbal'     => $foto_herbal->hashName(),
            ]);
        } else {

            $nama_herbal->item_produk             = $request->item_produk;
            $nama_herbal->jenis_produk            = $request->jenis_produk;
            $nama_herbal->kategori_herbal         = $request->kategori_herbal;
            $nama_herbal->nama_herbal        = $request->nama_herbal;
            $nama_herbal->slug                    = Str::slug($request->nama_herbal);
            $nama_herbal->komposisi                   = $request->komposisi;
            $nama_herbal->berat               = $request->berat;
            $nama_herbal->foto_herbal             = $request->file('foto_herbal')->store('img-fotoherbal');
            $nama_herbal->cara_pakai                    = $request->cara_pakai;
            $nama_herbal->cara_simpan                    = $request->cara_simpan;
            $nama_herbal->harga                    = $request->harga;
            $nama_herbal->deskripsi                    = $request->deskripsi;
            $nama_herbal->khasiat                    = $request->khasiat;
            $nama_herbal->no_bpom                    = $request->no_bpom;
            $nama_herbal->perhatian                    = $request->perhatian;
            $nama_herbal->stok                    = $request->stok;
        }

        // Menyimpan data perubahan
        $nama_herbal->update();

        // Setelah proses perubahan selesai diantar ke halaman index
        return redirect()->route('admin.index.ph');
    }

    public function editherbal($id)
    {

        $item_produk = ItemProduk::all();
        $kategori_herbal = KategoriHerbal::all();
        $jenis_produk = JenisProduk::all();

        $nama_herbal = Produkherbal::findOrFail($id);
        return view('Admin.ProdukHerbal.ph-update', [
            'nama_herbal'    => $nama_herbal,
            'item_produk'    => $item_produk,
            'kategori_herbal'    => $kategori_herbal,
            'jenis_produk'    => $jenis_produk,
        ]);
    }
}