<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\KategoriObat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriObatController extends Controller
{
    public function kategoriObat()
    {
        $kategori_obat = KategoriObat::all();
        return view('Admin.KategoriObat.kategoriobat', [
            'kategori_obat' => $kategori_obat,
        ]);
    }

    public function tambahkb(Request $request)
    {
        //  dd($request->all());
        KategoriObat::create([
            'kategori_obat' => $request->kategori_obat,
            'slug'          => Str::slug($request->kategori_obat),
        ]);

        return redirect()->back();
    }

    public function updatekb(Request $request)
    {
        //  dd($request->all());
        $kategori_obat                 = KategoriObat::findOrFail($request->id);
        $kategori_obat->kategori_obat    = $request->kategori_obat;
        $kategori_obat->slug             = Str::slug($request->kategori_obat);
        $kategori_obat->update();
        return redirect()->back()->with('Ok', 'Berhasil Update Data !');
    }

    public function hapuskb(Request $request)
    {
        //  dd($request->all());

        $kategori_obat = KategoriObat::findOrFail($request->id);
        $kategori_obat->delete();

        return redirect()->back()->with('Oke', 'Berhasil Hapus Data !');
    }
}
