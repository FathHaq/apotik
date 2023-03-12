@extends('template.base')

@section('title', 'Form Obat')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Detail Obat</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Detail Obat</li>
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
                <form action="{{ route('obat.tambah') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="foto_obat">Foto Obat</label>
                        <div class="input-group" id="foto_obat">
                            <div class="custom-file" id="foto_obat">
                                <input type="file" name="foto_obat" class="custom-file-input @error('foto_obat') is-invalid @enderror" id="foto_obat">
                                <label class="custom-file-label" for="foto_obat">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            @error('foto_obat')
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
                        <label for="kategori_obat">Kategori Obat</label>
                        <select class="custom-select @error('kategori_obat') is-invalid @enderror" name="kategori_obat" id="kategori_obat">
                            <option value="">Pilih Kategori Obat</option>
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
                            <option value="">Pilih Golongan Obat</option>
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
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" name="nama_obat" value="{{old('nama_obat')}}" id="nama_obat" placeholder="Masukkan  Nama obat">
                        @error('nama_obat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="kandungan_obat">Kandungan Obat</label>
                        <input type="text" class="form-control @error('kandungan_obat') is-invalid @enderror" name="kandungan_obat" value="{{old('kandungan_obat')}}" id="kandungan_obat" placeholder="Masukkan Kandungan Obat">
                        @error('kandungan_obat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" class="form-control @error('ukuran') is-invalid @enderror" name="ukuran" value="{{old('ukuran')}}" id="ukuran" placeholder="Masukkan ukuran">
                        @error('ukuran')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="dosis">Dosis</label>
                        <input type="text" class="form-control @error('dosis') is-invalid @enderror" name="dosis" value="{{old('dosis')}}" id="dosis" placeholder="Masukkan Dosis">
                        @error('dosis')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="aturan_pakai">Aturan Pakai</label>
                        <input type="text" class="form-control @error('aturan_pakai') is-invalid @enderror" name="aturan_pakai" value="{{old('aturan_pakai')}}" id="aturan_pakai" placeholder="Masukkan Aturan Pakai">
                        @error('aturan_pakai')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{old('harga')}}" id="harga" placeholder="Masukkan Harga Obat">
                        @error('harga')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{old('stok')}}" id="stok" placeholder="Masukkan Stok Obat">
                        @error('stok')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Obat</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{old('deskripsi')}}" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi Obat"></textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="efek_samping">Efek Samping</label>
                        <textarea class="form-control @error('efek_samping') is-invalid @enderror" name="efek_samping" value="{{old('efek_samping')}}" id="efek_samping" rows="3" placeholder="Masukkan Efek samping Obat"></textarea>
                        @error('efek_samping')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="perhatian">Perhatian</label>
                        <textarea class="form-control @error('perhatian') is-invalid @enderror" name="perhatian" value="{{old('perhatian')}}" id="perhatian" rows="3" placeholder="Masukkan perhatian Obat"></textarea>
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