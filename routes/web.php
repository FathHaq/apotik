<?php

use App\Http\Controllers\Admin\AddAdminController;
use App\Http\Controllers\Admin\GolonganObatController;
use App\Http\Controllers\Admin\ItemProdukController;
use App\Http\Controllers\Admin\JenisProdukController;
use App\Http\Controllers\Admin\KategoriHerbalController;
use App\Http\Controllers\Admin\KategoriObatController;
use App\Http\Controllers\Admin\ProdukObatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenggunaController;
use App\Http\Middleware\PenggunaMiddleware;
use App\Models\KategoriObat;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



// Akses Admin = 1
Route::prefix('b')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(BaseController::class)->group(function () {
        Route::get('/home', 'index')->name('index.home');
    });
    Route::controller(GolonganObatController::class)->group(function () {
        Route::get('/golongan-obat', 'golonganObat')->name('go.index');
        Route::post('/golongan-obat/create', 'tambahGO')->name('go.tambah');
        Route::put('/golongan-obat/update', 'updateGo')->name('go.update');
        Route::delete('/golongan-obat/hapus', 'hapusGo')->name('go.hapus');
    });
    Route::controller(JenisProdukController::class)->group(function () {
        Route::get('/jenis_produk', 'jenisproduk')->name('jp.index');
        Route::post('/jenis_produk/create', 'tambahjp')->name('jp.tambah');
        Route::put('/jenis_produk/update', 'updatejp')->name('jp.update');
        Route::delete('/jenis_produk/hapus', 'hapusjp')->name('jp.hapus');
    });
    Route::controller(ItemProdukController::class)->group(function () {
        Route::get('/item-produk', 'itemProduk')->name('ip.index');
        Route::post('/item-produk/create', 'tambahIP')->name('ip.tambah');
        Route::put('/item_produk/update', 'updateIp')->name('ip.update');
        Route::delete('/item_produk/hapus', 'hapusIp')->name('ip.hapus');
    });
    Route::controller(KategoriObatController::class)->group(function () {
        Route::get('/kategori-obat', 'kategoriObat')->name('kb.index');
        Route::post('/kategori-obat/create', 'tambahkb')->name('kb.tambah');
        Route::put('/kategori-obat/update', 'updatekb')->name('kb.update');
        Route::delete('/kategori-obat/hapus', 'hapuskb')->name('kb.hapus');
    });
    Route::controller(KategoriHerbalController::class)->group(function () {
        Route::get('/kategori-herbal', 'kategoriHerbal')->name('kh.index');
        Route::post('/kategori-herbal/create', 'tambahkh')->name('kh.tambah');
        Route::put('/kategori-herbal/update', 'updatekh')->name('kh.update');
        Route::delete('/kategori-herbal/hapus', 'hapuskh')->name('kh.hapus');
    });
    Route::controller(AddAdminController::class)->group(function () {
        Route::get('/add/admin', 'addadmin')->name('admin.index');
        Route::get('/admin/baru', 'baruadmin')->name('admin.baru');
        Route::post('admin/add', 'tambahadmin')->name('admin.tambah');
        Route::get('/admin/edit/{id}', 'editadmin')->name('admin.edit');
        Route::put('/admin/update/{id}', 'updateadmin')->name('admin.update');
        Route::delete('admin/hapus', 'hapusadmin')->name('admin.hapus');
    });
    Route::controller(ProdukObatController::class)->group(function () {
        Route::get('/produk-obat', 'produkObat')->name('admin.index.po');
        Route::get('/obat/baru', 'baruobat')->name('obat.baru');
        Route::post('/obat/add', 'addobat')->name('obat.tambah');
        Route::delete('/obat/hapus', 'hapusobat')->name('obat.hapus');
    });
});
// End Akses Admin

// Akses Pengunjung = 2
Route::prefix('p')->middleware(['auth', 'isPengguna'])->group(function () {
    Route::controller(PenggunaController::class)->group(function (){
        Route::get('/welcome/peserta', 'pengguna')->name('pengguna.index');
    });
});
// End Akses Pengunjung