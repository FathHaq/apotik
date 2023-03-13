@extends('template.base')

@section('title', 'Form Update laporan')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Laporan Data Barang</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('ldb.index') }}">Back</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Update Laporan Data Barang</li>
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
                <form action="{{ route('ldb.update', $laporan_data_barang->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="item_produk">Item Produk</label>
                        <select class="custom-select @error('item_produk') is-invalid @enderror" name="item_produk" id="item_produk">
                            <option value="{{$laporan_data_barang->item_produk}}">{{ $laporan_data_barang->itemproduk->item_produk }}</option>
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
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ $laporan_data_barang->nama_barang }}" id="nama_barang" placeholder="Masukkan  Nama Barang !">
                        @error('nama_barang')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga_beli">Harga Beli</label>
                        <input type="number" class="form-control @error('harga_beli') is-invalid @enderror" name="harga_beli" value="{{ $laporan_data_barang->harga_beli }}" id="harga_beli" placeholder="Masukkan Harga Beli !">
                        @error('harga_beli')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="number" class="form-control @error('harga_jual') is-invalid @enderror" name="harga_jual" value="{{ $laporan_data_barang->harga_jual }}" id="harga_jual" placeholder="Masukkan Harga Jual !">
                        @error('harga_jual')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tanggal_datang">Tanggal datang</label>
                        <input type="date" class="form-control @error('tanggal_datang') is-invalid @enderror" name="tanggal_datang" value="{{ $laporan_data_barang->tanggal_datang }}" id="tanggal_datang" placeholder="Masukkan Tanggal Datang !">
                        @error('tanggal_datang')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tanggal_expired">Tanggal Expired</label>
                        <input type="date" class="form-control @error('tanggal_expired') is-invalid @enderror" name="tanggal_expired" value="{{ $laporan_data_barang->tanggal_expired }}" id="tanggal_expired" placeholder="Masukkan Tanggal Expired !">
                        @error('tanggal_expired')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="text" class="form-control @error('jumlah_barang') is-invalid @enderror" name="jumlah_barang" value="{{ $laporan_data_barang->jumlah_barang }}" id="jumlah_barang" placeholder="Masukkan jumlah barang ">
                        @error('jumlah_barang')
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