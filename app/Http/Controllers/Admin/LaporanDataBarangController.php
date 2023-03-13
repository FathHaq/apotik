<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ItemProduk;
use App\Models\LaporanDataBarang;
use Illuminate\Http\Request;

class LaporanDataBarangController extends Controller
{
    public function ldb(){
        $item_produk = ItemProduk::all();
        $laporan_data_barang = LaporanDataBarang::all();

        return view('Admin.LaporanDataBarang.laporandatabarang', [
            'laporan_data_barang' => $laporan_data_barang,
            'item_produk'  => $item_produk,
        ]);
    }

    public function tambahldb(Request $request)
    {
        //  dd($request->all());
        LaporanDataBarang::create([
            'item_produk' => $request->item_produk,
            'nama_barang' => $request->nama_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'tanggal_datang' => $request->tanggal_datang,
            'tanggal_expired' => $request->tanggal_expired,
            'jumlah_barang' => $request->jumlah_barang,
        ]);

        return redirect()->back();
    }

    public function hapusldb(Request $request)
    {
        //  dd($request->all());

        $laporan_data_barang = LaporanDataBarang::findOrFail($request->id);
        $laporan_data_barang->delete();

        return redirect()->back()->with('Oke', 'Berhasil Hapus Data !');
    }

    public function editldb($id)
    {
        $item_produk = ItemProduk::all();

        $laporan_data_barang = LaporanDataBarang::findOrFail($id);
        return view('Admin.LaporanDataBarang.updateldb', compact('item_produk', 'laporan_data_barang'));
    }

    public function updateldb(Request $request, $id)
    {
        // dd($request->all());

         // Cari data yang mau diedit
         $laporan_data_barang = LaporanDataBarang::findOrFail($id);

         //Proses Ubah datanya
         $laporan_data_barang->item_produk          = $request->item_produk;
         $laporan_data_barang->nama_barang          = $request->nama_barang;
         $laporan_data_barang->harga_beli          = $request->harga_beli;
         $laporan_data_barang->harga_jual          = $request->harga_jual;
         $laporan_data_barang->tanggal_datang          = $request->tanggal_datang;
         $laporan_data_barang->tanggal_expired          = $request->tanggal_expired;
         $laporan_data_barang->jumlah_barang          = $request->jumlah_barang;
 
         // Menyimpan data perubahan
         $laporan_data_barang->update();
 
         // Setelah proses perubahan selesai diantar ke halaman index
         return redirect()->route('ldb.index');
    }
}
