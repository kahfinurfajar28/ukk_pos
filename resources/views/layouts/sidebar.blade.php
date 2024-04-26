<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-3 card-body">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('image')}}/download.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KApos</span>
    </a>

    <!-- Sidebar -->
    {{-- <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexand</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Opsi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              {{-- <li class="ms-2 nav-item">
                <a href="home" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="ms-2">Dashboard</p>
                </a>
              </li> --}}
              {{-- <li class="ms-2 nav-item">
                <a href="penggunas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="ms-2">Pelanggan</p>
                </a>
              </li> --}}
              <li class="ms-2 nav-item">
                <a href="distributors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="ms-2">Distributor</p>
                </a>
              </li>
              <li class="ms-2 nav-item">
                <a href="mereks" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="ms-2">Merek</p>
                </a>
              </li>
              <li class="ms-2 nav-item">
                <a href="barangs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="ms-2">Data Barang</p>
                </a>
              </li>
              <li class="ms-2 nav-item">
                <a class="nav-link {{ request()->is('items') ? 'active' : '' }}" href="{{ url('items') }}">
                    <i class="far fa-circle nav-icon"></i>
                    <span class="ms-2">Keranjang</span>
                </a>
            </li>
              <li class="ms-2 nav-item">
                <a href="transaksis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="ms-2">Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <br>
        <li class="col-auto">
          @auth
          {{-- <p class="dark"><b class="btn container-0">{{ Auth::user()->name }}</b></p> --}}
          <i class="bi bi-box-arrow-right"></i>
          <a class="btn btn-dark" onclick="return confirm('Yakin ingin {{ 'logout' }}?')" href="{{ route('logout') }}">Logout</a>
          @endauth
        </li>
      </br>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>