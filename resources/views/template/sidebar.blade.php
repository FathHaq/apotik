<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
        <img src="{{asset('images/WhatsApp_Image_2023-03-06_at_01.09.11-removebg-preview (1).png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-7" <span class="brand-text font-weight-bold">DHAROSDENT</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('index.home') }}" class="d-block font-weight-semibold">Halo, {{ Auth::user()->name }}</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-chart-simple"></i>
                        <p>
                            Chart
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-o nav-item"></i>
                                <p>&emsp; Chart Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-o nav-item"></i>
                                <p>&emsp; Chart User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-o nav-item"></i>
                                <p>&emsp; Chart Review</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('jp.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('go.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Golongan Obat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ip.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Item Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kb.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori Obat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kh.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori Herbal</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-pills"></i>
                        <p>
                            Produk
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.index.po') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produk Obat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.index.ph') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produk Herbal</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-book-medical"></i>
                        <p>
                            Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('sp.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Supplier</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-book-open"></i>
                        <p>
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('ldb.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Data Barang</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-plus"></i>
                        <p>Tambah Admin</p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>