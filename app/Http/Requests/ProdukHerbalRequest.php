<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukHerbalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'foto_herbal'                    => 'required',
            'item_produk'                  => 'required',
            'kategori_herbal'                => 'required',
            'jenis_produk'                 => 'required',
            'nama_herbal'                    => 'required|unique:produk_herbals',
            'komposisi'               => 'required',
            'berat'                       => 'required',
            'harga'                        => 'required',
            'deskripsi'                    => 'required',
            'cara_pakai'                 => 'required',
            'cara_simpan'                 => 'required',
            'perhatian'                    => 'required',
            'khasiat'                    => 'required',
            'stok'                         => 'required',
            'no_bpom'                         => 'required',
        ];
    }

    public function messages()
    {
        return [
            'foto_herbal.required'           => 'Tolong Masukkan Foto herbal !',
            'item_produk.required'         => 'Silahkan Masukkan Item Produk',
            'kategori_herbal.required'         => 'Silahkan Masukkan Kategori herbal',
            'jenis_produk.required'     => 'Silahkan Masukkan Jenis Produk',
            'nama_herbal.required'    => 'Silahkan Masukkan Nama herbal',
            'komposisi.required'               => 'Silahkan Masukkan Kandungan herbal',
            'berat.required'                => 'Silahkan Masukkan Ukuran herbal',
            'harga.required'           => 'Silahkan Masukkan Harga herbal',
            'deskripsi.required'           => 'Silahkan Masukkan Deskripsi herbal',
            'cara_pakai.required'           => 'Silahkan Masukkan Aturan Pakai herbal',
            'cara_simpan.required'           => 'Silahkan Masukkan Efek Samping herbal',
            'perhatian.required'           => 'Silahkan Masukkan Perhatian herbal',
            'khasiat.required'           => 'Silahkan Masukkan Perhatian herbal',
            'stok.required'           => 'Silahkan Masukkan Stok herbal',
            'no_bpom.required'           => 'Silahkan Masukkan Stok herbal',
        ];
    }
}
