@extends('template.base')

@section('title', 'Data Herbal')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Herbal</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Data Herbal</li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Herbal</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <a href="{{ route('herbal.baru') }}" class="btn btn-primary btn-sm">
                                        + Herbal
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
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
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th width="10%">Foto herbal</th>
                                    <th>Nama Herbal</th>
                                    <th width="10%">Item Produk</th>
                                    <th width="10%">Jenis Produk</th>
                                    <th width="10%">Berat</th>
                                    <th>Khasiat</th>
                                    <th>Komposisi</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nama_herbal as $row)
                                <tr>
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('herbal.edit', $row->id) }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#detailherbal{{ $row->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/'.$row->foto_herbal) }}" alt="{{ $row->nama_herbal }}" class="img-fluid">
                                    </td>
                                    <td>{{ $row->nama_herbal }}</td>
                                    <td>{{ $row->itemproduk->item_produk }}</td>
                                    <td>{{ $row->jenisproduk->jenis_produk }}</td>
                                    <td>{{ $row->berat }}</td>
                                    <td>{{ $row->komposisi }}</td>
                                    <td>{{ $row->harga }}</td>
                                    <td>{{ $row->stok }}</td>
                                    <td>
                                        @if($row->status == 1)
                                        <span class="badge badge-success">Tersedia</span>
                                        @elseif($row->status == 2)
                                        <span class="badge badge-danger">Penuh</span>
                                        @endif
                                    </td>
                                </tr>
                                @include('Admin.ProdukHerbal.ph-hapus')
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- End Main Content -->

<!-- Modal -->
@foreach($nama_herbal as $row)
<div class="modal fade" id="detailherbal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="detailherbal{{ $row->id }}">Produk Herbal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <table class="table table-bordered">
                        
                        <thead>
                            <tr>
                                <th width="10%">Foto Herbal</th>
                                <th width="10%">Item Produk</th>
                                <th width="10%">Nama Herbal</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/'.$row->foto_herbal) }}" alt="{{ $row->nama_herbal }}" class="img-fluid">
                                </td>
                                <td>{{ $row->itemproduk->item_produk }}</td>
                                <td>{{ $row->nama_herbal }}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th width="10%">Kategori Herbal</th>
                                <th width="10%">Jenis Produk</th>
                                <th width="10%">Komposisi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $row->kategoriherbal->kategori_herbal }}</td>
                                <td>{{ $row->jenisproduk->jenis_produk }}</td>
                                <td>{{ $row->komposisi }}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th width="10%">Berat</th>
                                <th width="10%">No BPOM</th>
                                <th width="10%">Harga</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $row->berat }}</td>
                                <td>{{ $row->no_bpom }}</td>
                                <td>{{ $row->harga }}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th width="10%">Stok</th>
                                <th width="10%">Status</th>
                                <th width="10%">Khasiat</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $row->stok }}</td>
                                <td>
                                    @if($row->status == 1)
                                    <span class="badge badge-success">Tersedia</span>
                                    @elseif($row->status == 2)
                                    <span class="badge badge-danger">Penuh</span>
                                    @endif
                                </td>
                                <td>{{ $row->khasiat }}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Cara Pakai</th>
                                <th>Cara Penyimpanan</th>
                                <th>Perhatian</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $row->cara_pakai }}</td>
                                <td>{{ $row->cara_simpan }}</td>
                                <td>{{ $row->perhatian }}</td>
                            </tr>
                        </tbody>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Deskripsi Produk Herbal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $row->deskripsi }}</td>
                                </tr>
                            </tbody>
                        </table>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection