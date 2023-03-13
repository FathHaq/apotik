@extends('template.base')

@section('title', 'Form Herbal')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Detail Herbal</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Detail Herbal</li>
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
                <!-- Alert -->
                @if(Session::get('Ok'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('Ok') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if(Session::get('Oke'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('Oke') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <!-- End Alert -->
                <form action="{{ route('herbal.tambah') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="foto_herbal">Foto Herbal</label>
                        <div class="input-group" id="foto_herbal">
                            <div class="custom-file" id="foto_herbal">
                                <input type="file" name="foto_herbal" class="custom-file-input @error('foto_herbal') is-invalid @enderror" id="foto_herbal">
                                <label class="custom-file-label" for="foto_herbal">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            @error('foto_herbal')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="item_produk">Item Produk</label>
                        <select class="custom-select @error('item_produk') is-invalid @enderror" name="item_produk" id="item_produk">
                            <option value="">Pilih Item Produk</option>
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
                            <option value="">Pilih Kategori Herbal</option>
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
                            <option value="">Pilih Jenis Produk</option>
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
                        <input type="text" class="form-control @error('nama_herbal') is-invalid @enderror" name="nama_herbal" value="{{old('nama_herbal')}}" id="nama_herbal" placeholder="Masukkan  Nama Herbal">
                        @error('nama_herbal')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="komposisi">Komposisi</label>
                        <input type="text" class="form-control @error('komposisi') is-invalid @enderror" name="komposisi" value="{{old('komposisi')}}" id="komposisi" placeholder="Masukkan Komposisi Herbal">
                        @error('komposisi')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="berat">Berat</label>
                        <input type="text" class="form-control @error('berat') is-invalid @enderror" name="berat" value="{{old('berat')}}" id="berat" placeholder="Masukkan berat produk">
                        @error('berat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cara_pakai">Cara Pakai</label>
                        <input type="text" class="form-control @error('cara_pakai') is-invalid @enderror" name="cara_pakai" value="{{old('cara_pakai')}}" id="cara_pakai" placeholder="Masukkan Cara Pakai">
                        @error('cara_pakai')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cara_simpan">Cara Simpan</label>
                        <input type="text" class="form-control @error('cara_simpan') is-invalid @enderror" name="cara_simpan" value="{{old('cara_simpan')}}" id="cara_simpan" placeholder="Masukkan Cara Simpan">
                        @error('cara_simpan')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_bpom">No BPOM</label>
                        <input type="number" class="form-control @error('no_bpom') is-invalid @enderror" name="no_bpom" value="{{old('no_bpom')}}" id="no_bpom" placeholder="Masukkan No BPOM Herbal">
                        @error('no_bpom')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{old('harga')}}" id="harga" placeholder="Masukkan Harga Herbal">
                        @error('harga')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{old('stok')}}" id="stok" placeholder="Masukkan Stok Herbal">
                        @error('stok')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Herbal</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{old('deskripsi')}}" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi Herbal"></textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="khasiat">Khasiat</label>
                        <textarea class="form-control @error('khasiat') is-invalid @enderror" name="khasiat" value="{{old('khasiat')}}" id="khasiat" rows="3" placeholder="Masukkan Khasiat Herbal"></textarea>
                        @error('khasiat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="perhatian">Perhatian</label>
                        <textarea class="form-control @error('perhatian') is-invalid @enderror" name="perhatian" value="{{old('perhatian')}}" id="perhatian" rows="3" placeholder="Masukkan perhatian Herbal"></textarea>
                        @error('perhatian')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- End Main Content -->
@endsection