@extends('template.base')

@section('title', 'Form Update Herbal')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Update Herbal</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index.ph') }}">Back</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Update Herbal</li>
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
                <form action="{{ route('herbal.update', $nama_herbal->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="foto_herbal">Foto Herbal</label>
                        <div class="input-group" id="foto_herbal">
                            <div class="custom-file" id="foto_herbal">
                                <input type="file" name="foto_herbal" class="custom-file-input" id="foto_herbal" value="{{$nama_herbal->foto_herbal}}">
                                <label class="custom-file-label" for="foto_herbal">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="item_produk">Item Produk</label>
                        <select class="custom-select @error('item_produk') is-invalid @enderror" name="item_produk" id="item_produk">
                            <option value="{{$nama_herbal->item_produk}}">{{ $nama_herbal->itemproduk->item_produk }}</option>
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
                        <label for="kategori_herbal">Kategori Herbal</label>
                        <select class="custom-select @error('kategori_herbal') is-invalid @enderror" name="kategori_herbal" id="kategori_herbal">
                            <option value="{{$nama_herbal->kategori_herbal}}">{{ $nama_herbal->kategoriherbal->kategori_herbal }}</option>
                            @foreach($kategori_herbal as $row)
                            <option value="{{ $row->id }}" {{ old('kategori_herbal') == $row->id ? 'selected' : '' }}>{{ $row->kategori_herbal }}</option>
                            @endforeach
                        </select>
                        @error('kategori_herbal')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jenis_produk">Jenis Produk</label>
                        <select class="custom-select @error('jenis_produk') is-invalid @enderror" name="jenis_produk" id="jenis_produk">
                            <option value="{{$nama_herbal->jenis_produk}}">{{ $nama_herbal->jenisproduk->jenis_produk }}</option>
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
                        <label for="nama_herbal">Nama Herbal</label>
                        <input type="text" class="form-control @error('nama_herbal') is-invalid @enderror" name="nama_herbal" value="{{ $nama_herbal->nama_herbal }}" id="nama_herbal" placeholder="Masukkan  Nama Obat">
                        @error('nama_herbal')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="komposisi">Komposisi Herbal</label>
                        <input type="text" class="form-control @error('komposisi') is-invalid @enderror" name="komposisi" value="{{ $nama_herbal->komposisi }}" id="komposisi" placeholder="Masukkan Kandungan Obat">
                        @error('komposisi')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="berat">Berat</label>
                        <input type="text" class="form-control @error('berat') is-invalid @enderror" name="berat" value="{{ $nama_herbal->berat }}" id="berat" placeholder="Masukkan berat">
                        @error('berat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cara_pakai">Cara Pakai</label>
                        <input type="text" class="form-control @error('cara_pakai') is-invalid @enderror" name="cara_pakai" value="{{ $nama_herbal->cara_pakai }}" id="cara_pakai" placeholder="Masukkan Aturan Pakai">
                        @error('cara_pakai')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cara_simpan">Cara Simpan</label>
                        <input type="text" class="form-control @error('cara_simpan') is-invalid @enderror" name="cara_simpan" value="{{ $nama_herbal->cara_simpan }}" id="cara_simpan" placeholder="Masukkan Aturan Pakai">
                        @error('cara_simpan')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_bpom">No BPOM</label>
                        <input type="number" class="form-control @error('no_bpom') is-invalid @enderror" name="no_bpom" value="{{ $nama_herbal->no_bpom }}" id="no_bpom" placeholder="Masukkan no_bpom ">
                        @error('no_bpom')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $nama_herbal->harga }}" id="harga" placeholder="Masukkan harga ">
                        @error('harga')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ $nama_herbal->stok }}" id="stok" placeholder="Masukkan Stok ">
                        @error('stok')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Herbal</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ $nama_herbal->deskripsi }}" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi ">{{ $nama_herbal->deskripsi }}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="khasiat">Khasiat</label>
                        <textarea class="form-control @error('khasiat') is-invalid @enderror" name="khasiat" value="{{ $nama_herbal->khasiat }}" id="khasiat" rows="3" placeholder="Masukkan Efek Samping">{{ $nama_herbal->khasiat }}</textarea>
                        @error('khasiat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="perhatian">Perhatian Herbal</label>
                        <textarea class="form-control @error('perhatian') is-invalid @enderror" name="perhatian" value="{{ $nama_herbal->perhatian }}" id="perhatian" rows="3" placeholder="Masukkan perhatian ">{{ $nama_herbal->perhatian }}</textarea>
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