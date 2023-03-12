<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriHerbal;
use App\Http\Controllers\Controller;

class KategoriHerbalController extends Controller
{
    public function kategoriHerbal()
    {
        $kategori_herbal = KategoriHerbal::all();
        return view('Admin.KategoriHerbal.kategoriherbal', [
            'kategori_herbal' => $kategori_herbal,
        ]);
    }

    public function tambahkh(Request $request)
    {
        //  dd($request->all());
        KategoriHerbal::create([
            'kategori_herbal' => $request->kategori_herbal,
            'slug'          => Str::slug($request->kategori_herbal),
        ]);

        return redirect()->back();
    }

    public function updatekh(Request $request)
    {
        //  dd($request->all());
        $kategori_herbal                 = KategoriHerbal::findOrFail($request->id);
        $kategori_herbal->kategori_herbal    = $request->kategori_herbal;
        $kategori_herbal->slug             = Str::slug($request->kategori_herbal);
        $kategori_herbal->update();
        return redirect()->back()->with('Ok', 'Berhasil Update Data !');
    }

    public function hapuskh(Request $request)
    {
        //  dd($request->all());

        $kategori_herbal = KategoriHerbal::findOrFail($request->id);
        $kategori_herbal->delete();

        return redirect()->back()->with('Oke', 'Berhasil Hapus Data !');
    }
}
