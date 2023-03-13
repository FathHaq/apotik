@extends('template.base')

@section('title', 'Form Update Obat')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Update Obat</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index.po') }}">Back</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Update Obat</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ENd Header -->

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card-body">
                <form action="{{ route('obat.update', $nama_obat->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="foto_obat">Foto Obat</label>
                        <div class="input-group" id="foto_obat">
                            <div class="custom-file" id="foto_obat">
                                <input type="file" name="foto_obat" class="custom-file-input" id="foto_obat" value="{{$nama_obat->foto_obat}}">
                                <label class="custom-file-label" for="foto_obat">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="item_produk">Item Produk</label>
                        <select class="custom-select @error('item_produk') is-invalid @enderror" name="item_produk" id="item_produk">
                            <option value="{{$nama_obat->item_produk}}">{{ $nama_obat->itemproduk->item_produk }}</option>
                            @foreach($item_produk as $row)
                            <option value="{{ $row->id }}" {{ old('item_produk') == $row->id ? 'selected' : '' }}>{{ $row->item_produk }}</option>
                            @endforeach
                        </select>
                        @error('item_produk')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="kategori_obat">Kategori Obat</label>
                        <select class="custom-select @error('kategori_obat') is-invalid @enderror" name="kategori_obat" id="kategori_obat">
                            <option value="{{$nama_obat->kategori_obat}}">{{ $nama_obat->kategoriobat->kategori_obat }}</option>
                            @foreach($kategori_obat as $row)
                            <option value="{{ $row->id }}" {{ old('kategori_obat') == $row->id ? 'selected' : '' }}>{{ $row->kategori_obat }}</option>
                            @endforeach
                        </select>
                        @error('kategori_obat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <label for="golongan_obat">Golongan Obat</label>
                        <select class="custom-select @error('golongan_obat') is-invalid @enderror" name="golongan_obat" id="golongan_obat">
                            <option value="{{$nama_obat->golongan_obat}}">{{ $nama_obat->golonganobat->golongan_obat }}</option>
                            @foreach($golongan_obat as $row)
                            <option value="{{ $row->id }}" {{ old('golongan_obat') == $row->id ? 'selected' : '' }}>{{ $row->golongan_obat }}</option>
                            @endforeach
                        </select>
                        @error('golongan_obat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jenis_produk">Jenis Produk</label>
                        <select class="custom-select @error('jenis_produk') is-invalid @enderror" name="jenis_produk" id="jenis_produk">
                            <option value="{{$nama_obat->jenis_produk}}">{{ $nama_obat->jenisproduk->jenis_produk }}</option>
                            @foreach($jenis_produk as $row)
                            <option value="{{ $row->id }}" {{ old('jenis_produk') == $row->id ? 'selected' : '' }}>{{ $row->jenis_produk }}</option>
                            @endforeach
                        </select>
                        @error('jenis_produk')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" name="nama_obat" value="{{ $nama_obat->nama_obat }}" id="nama_obat" placeholder="Masukkan  Nama Obat">
                        @error('nama_obat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="kandungan_obat">Kandungan Obat</label>
                        <input type="text" class="form-control @error('kandungan_obat') is-invalid @enderror" name="kandungan_obat" value="{{ $nama_obat->kandungan_obat }}" id="kandungan_obat" placeholder="Masukkan Kandungan Obat">
                        @error('kandungan_obat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" class="form-control @error('ukuran') is-invalid @enderror" name="ukuran" value="{{ $nama_obat->ukuran }}" id="ukuran" placeholder="Masukkan Ukuran">
                        @error('ukuran')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="dosis">Dosis</label>
                        <input type="text" class="form-control @error('dosis') is-invalid @enderror" name="dosis" value="{{ $nama_obat->dosis }}" id="dosis" placeholder="Masukkan dosis">
                        @error('dosis')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="aturan_pakai">Aturan Pakai</label>
                        <input type="text" class="form-control @error('aturan_pakai') is-invalid @enderror" name="aturan_pakai" value="{{ $nama_obat->aturan_pakai }}" id="aturan_pakai" placeholder="Masukkan Aturan Pakai">
                        @error('aturan_pakai')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $nama_obat->harga }}" id="harga" placeholder="Masukkan harga ">
                        @error('harga')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ $nama_obat->stok }}" id="stok" placeholder="Masukkan Stok ">
                        @error('stok')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Obat</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ $nama_obat->deskripsi }}" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi ">{{ $nama_obat->deskripsi }}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="efek_samping">Efek Samping</label>
                        <textarea class="form-control @error('efek_samping') is-invalid @enderror" name="efek_samping" value="{{ $nama_obat->efek_samping }}" id="efek_samping" rows="3" placeholder="Masukkan Efek Samping">{{ $nama_obat->efek_samping }}</textarea>
                        @error('efek_samping')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="perhatian">Perhatian Obat</label>
                        <textarea class="form-control @error('perhatian') is-invalid @enderror" name="perhatian" value="{{ $nama_obat->perhatian }}" id="perhatian" rows="3" placeholder="Masukkan perhatian ">{{ $nama_obat->perhatian }}</textarea>
                        @error('perhatian')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- End Main Content -->
@endsection