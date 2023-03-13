@extends('template.base')

@section('title', 'Laporan Data Barang')

@section('content')

<section class="content">
    <div class="container">

        <!-- Page header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Laporan Data Barang</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Laporan Data Barang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
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
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mt-3">Laporan Data Barang</h5>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    + Laporan
                </button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Item</th>
                        <th>Nama Barang</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Tanggal Datang</th>
                        <th>Tanggal Expired</th>
                        <th>Stok Barang</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporan_data_barang as $row)
                    <tr>
                        <td>{{ $row->itemproduk->item_produk }}</td>
                        <td>{{ $row->nama_barang }}</td>
                        <td>{{ $row->harga_beli }}</td>
                        <td>{{ $row->harga_jual }}</td>
                        <td>{{ $row->tanggal_datang }}</td>
                        <td>{{ $row->tanggal_expired }}</td>
                        <td>{{ $row->jumlah_barang }}</td>
                        <td>
                            @if($row->status == 1)
                            <span class="badge badge-success">Tersedia</span>
                            @elseif($row->status == 2)
                            <span class="badge badge-danger">Penuh</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('ldb.edit', $row->id) }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                            <a href="#" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                        </td>DELO Jelek
                    </tr>
                    @include('Admin.LaporanDataBarang.hapusldb')
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>

        <!-- End MAin Content -->
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Laporan Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('ldb.tambah')}}" method="POST">
                    @csrf
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

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" required name="nama_barang" class="form-control" id="nama_barang">
                    </div>
                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="number" required name="harga_beli" class="form-control" id="harga_beli">
                    </div>
                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="number" required name="harga_jual" class="form-control" id="harga_jual">
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_datang" class="form-label">Tanggal Datang</label>
                        <input type="date" required name="tanggal_datang" class="form-control" id="tanggal_datang">
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_expired" class="form-label">Tanggal Expired</label>
                        <input type="date" required name="tanggal_expired" class="form-control" id="tanggal_expired">
                    </div>


                    <div class="mb-3">
                        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                        <input type="text" required name="jumlah_barang" class="form-control" id="jumlah_barang">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection