<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\GolonganObat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GolonganObatRequest;

class GolonganObatController extends Controller
{
    public function golonganObat()
    {
        $golongan_obat = GolonganObat::all();
        return view('Admin.GolonganObat.golonganobat', [
            'golongan_obat' => $golongan_obat,
        ]);
    }

    public function tambahGO(Request $request)
    {
        //  dd($request->all());
        GolonganObat::create([
            'golongan_obat' => $request->golongan_obat,
            'slug'          => Str::slug($request->golongan_obat),
        ]);

        return redirect()->back();
    }

    public function updateGo(Request $request)
    {
        //  dd($request->all());
        $golongan_obat                   = GolonganObat::findOrFail($request->id);
        $golongan_obat->golongan_obat    = $request->golongan_obat;
        $golongan_obat->slug             = Str::slug($request->golongan_obat);
        $golongan_obat->update();
        return redirect()->back()->with('Ok', 'Berhasil Update Data !');
    }

    public function hapusGo(Request $request)
    {
        //  dd($request->all());

        $golongan_obat = GolonganObat::findOrFail($request->id);
        $golongan_obat->delete();

        return redirect()->back()->with('Oke', 'Berhasil Hapus Data !');
    }
}
