<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier()
    {
        $nama_supplier = Supplier::all();
        return view('Admin.Suppllier.supplier', [
            'nama_supplier' => $nama_supplier,
        ]);
    }

    public function tambahsp(Request $request)
    {
        //  dd($request->all());
        Supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->back();
    }

    public function updatesp(Request $request)
    {
        //  dd($request->all());
        $nama_supplier                   = Supplier::findOrFail($request->id);
        $nama_supplier->nama_supplier    = $request->nama_supplier;
        $nama_supplier->alamat    = $request->alamat;
        $nama_supplier->no_telp    = $request->no_telp;
        $nama_supplier->update();
        return redirect()->back()->with('Ok', 'Berhasil Update Data !');
    }

    public function hapussp(Request $request)
    {
        //  dd($request->all());

        $nama_supplier = Supplier::findOrFail($request->id);
        $nama_supplier->delete();

        return redirect()->back()->with('Oke', 'Berhasil Hapus Data !');
    }
}
