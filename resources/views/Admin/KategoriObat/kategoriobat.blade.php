@extends('template.base')

@section('title', 'Kategori Obat')

@section('content')

<section class="content">
    <div class="container">

        <!-- Page header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Kategori Obat</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Kategori Obat</li>
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
                <h5 class="mt-3">Nama Kategori Obat</h5>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    + Item
                </button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kategori Obat</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori_obat as $row)
                    <tr>
                        <td>{{ $row->kategori_obat }}</td>
                        <td>{{ $row->slug }}</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#edit{{ $row->id }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                            <a href="#" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    @include('Admin.KategoriObat.updatekb')
                    @include('Admin.KategoriObat.hapuskb')
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
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Kategori Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('kb.tambah')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kategori_obat" class="form-label">Kategori Obat</label>
                        <input type="text" required name="kategori_obat" class="form-control" id="kategori_obat">
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