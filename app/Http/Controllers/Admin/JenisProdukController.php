<?php

namespace App\Http\Controllers\Admin;

use App\Models\JenisProduk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JenisProdukController extends Controller
{
    public function jenisproduk()
    {
        $jenis_produk = JenisProduk::all();
        return view('Admin.JenisProduk.jenisproduk', [
            'jenis_produk' => $jenis_produk,
        ]);
    }

    public function tambahjp(Request $request)
    {
        //  dd($request->all());
        JenisProduk::create([
            'jenis_produk' => $request->jenis_produk,
            'slug'          => Str::slug($request->jenis_produk),
        ]);

        return redirect()->back();
    }

    public function updatejp(Request $request)
    {
        //  dd($request->all());
        $jenis_produk                 = JenisProduk::findOrFail($request->id);
        $jenis_produk->jenis_produk    = $request->jenis_produk;
        $jenis_produk->slug             = Str::slug($request->jenis_produk);
        $jenis_produk->update();
        return redirect()->back()->with('Ok', 'Berhasil Update Data !');
    }

    public function hapusjp(Request $request)
    {
        //  dd($request->all());

        $jenis_produk = JenisProduk::findOrFail($request->id);
        $jenis_produk->delete();

        return redirect()->back()->with('Oke', 'Berhasil Hapus Data !');
    }
}
