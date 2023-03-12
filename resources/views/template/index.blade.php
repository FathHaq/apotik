@extends('template.base')

@section('title', 'Dashboard')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard Dharosdent</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1">
                        <a href="#">
                            <i class="fa-sharp fa-solid fa-bag-shopping"></i>
                        </a>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Produk</span>
                        <span class="info-box-number">
                            0
                        </span>
                    </div>

                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1">
                        <a href="#">
                            <i class="fa-solid fa-chart-simple"></i>
                        </a>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Laporan</span>
                        <span class="info-box-number">0</span>
                    </div>

                </div>

            </div>


            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1">
                        <a href="#">
                            <i class="fa-solid fa-sack-dollar"></i></i>
                        </a>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Transaksi</span>
                        <span class="info-box-number">0</span>
                    </div>

                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1">
                        <a href="#">
                            <i class="fas fa-users"></i>
                        </a>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">User</span>
                        <span class="info-box-number">{{ $user }}</span>
                    </div>

                </div>

            </div>


        </div>
</section>
<!-- ENd Main Content -->
@endsection