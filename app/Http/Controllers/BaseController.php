<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProdukHerbal;
use App\Models\ProdukObat;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){

        $user = User::count();
        $produk_obat = ProdukObat::count();
        $produk_herbal = ProdukHerbal::count();
        $supplier = Supplier::count();

        return view('template.index',[
            'user'   => $user,
            'produk_obat'  => $produk_obat,
            'produk_herbal'   => $produk_herbal,
            'supplier'    => $supplier,
        ]);
    }
}
