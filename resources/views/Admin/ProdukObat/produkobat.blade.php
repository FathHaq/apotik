@extends('template.base')

@section('title', 'Data Obat')

@section('content')

<!-- Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Obat</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
          <li class="breadcrumb-item active">Data Obat</li>
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
            <h3 class="card-title">Data Obat</h3>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 250px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                  <a href="{{ route('obat.baru') }}" class="btn btn-primary btn-sm">
                    + Obat
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
                  <th width="10%">Foto Produk</th>
                  <th>Nama Obat</th>
                  <th width="10%">Item Produk</th>
                  <th width="10%">Golongan Obat</th>
                  <th width="10%">Jenis Produk</th>
                  <th width="10%">Berat</th>
                  <th>Kandungan Obat</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($nama_obat as $row)
                  <tr>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{ route('obat.edit', $row->id) }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#" data-toggle="modal" data-target="#detail{{ $row->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                    <td>
                      <img src="{{ asset('storage/'.$row->foto_obat) }}" alt="{{ $row->nama_obat }}" class="img-fluid">
                    </td>
                    <td>{{ $row->nama_obat }}</td>
                    <td>{{ $row->itemproduk->item_produk }}</td>
                    <td>{{ $row->golonganobat->golongan_obat }}</td>
                    <td>{{ $row->jenisproduk->jenis_produk }}</td>
                    <td>{{ $row->ukuran }}</td>
                    <td>{{ $row->kandungan_obat }}</td>
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
                  @include('Admin.ProdukObat.po-hapus')
                  @include('Admin.ProdukObat.po-detail')
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


@endsection