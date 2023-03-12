<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukObatRequest extends FormRequest
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
            'foto_obat'                    => 'required',
            'item_produk'                  => 'required',
            'kategori_obat'                => 'required',
            'golongan_obat'                => 'required',
            'jenis_produk'                 => 'required',
            'nama_obat'                    => 'required|unique:produk_obats',
            'kandungan_obat'               => 'required',
            'ukuran'                       => 'required',
            'dosis'                        => 'required',
            'harga'                        => 'required',
            'deskripsi'                    => 'required',
            'aturan_pakai'                 => 'required',
            'efek_samping'                 => 'required',
            'perhatian'                    => 'required',
            'stok'                         => 'required',
        ];
    }

    public function messages()
    {
        return [
            'foto_obat.required'           => 'Tolong Masukkan Foto Obat !',
            'item_produk.required'         => 'Silahkan Masukkan Item Produk',
            'kategori_obat.required'         => 'Silahkan Masukkan Kategori Obat',
            'golongan_obat.required'        => 'Silahkan Masukkan Golongan Obat',
            'jenis_produk.required'     => 'Silahkan Masukkan Jenis Produk',
            'nama_obat.required'    => 'Silahkan Masukkan Nama Obat',
            'kandungan_obat.required'               => 'Silahkan Masukkan Kandungan Obat',
            'ukuran.required'                => 'Silahkan Masukkan Ukuran Obat',
            'dosis.required'           => 'Silahkan Masukkan Dosis Obat',
            'harga.required'           => 'Silahkan Masukkan Harga Obat',
            'deskripsi.required'           => 'Silahkan Masukkan Deskripsi Obat',
            'aturan_pakai.required'           => 'Silahkan Masukkan Aturan Pakai Obat',
            'efek_samping.required'           => 'Silahkan Masukkan Efek Samping Obat',
            'perhatian.required'           => 'Silahkan Masukkan Perhatian Obat',
            'stok.required'           => 'Silahkan Masukkan Stok Obat',
        ];
        
    }
}
