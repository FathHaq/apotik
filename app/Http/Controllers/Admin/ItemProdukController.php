<?php

namespace App\Http\Controllers\Admin;

use App\Models\ItemProduk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemProdukController extends Controller
{
     public function itemProduk(){
      $item_produk = ItemProduk::all();
        return view('Admin.ItemProduk.itemproduk', [
            'item_produk' => $item_produk,
        ]);
        
     }

     public function tambahIP(Request $request){
        //  dd($request->all());
        ItemProduk::create([
            'item_produk' => $request->item_produk,
            'slug'          => Str::slug($request->item_produk),
        ]);

        return redirect()->back();
     }

     public function updateIp(Request $request)
     {
         //  dd($request->all());
         $item_produk                 = ItemProduk::findOrFail($request->id);
         $item_produk->item_produk    = $request->item_produk;
         $item_produk->slug             = Str::slug($request->item_produk);
         $item_produk->update();
         return redirect()->back()->with('Ok', 'Berhasil Update Data !');
     }
 
     public function hapusIp(Request $request)
     {
         //  dd($request->all());
 
         $item_produk = ItemProduk::findOrFail($request->id);
         $item_produk->delete();
 
         return redirect()->back()->with('Oke', 'Berhasil Hapus Data !');
     }
}
