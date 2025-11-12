<nav class="offcanvas-lg offcanvas-start sidebar bg-body-tertiary" tabindex="-1" id="sidebarAdmin">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu Utama</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAdmin"
      aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column p-0">
    <div class="p-3">
      <a href="#" class="navbar-brand fs-4 text-primary">Admin Ungu</a>
    </div>

    <ul class="nav nav-pills flex-column mb-auto p-3">
      <li class="nav-item mb-1">
        <a href="#" class="nav-link active">
          <i class="bi bi-house-door-fill me-2"></i> Dashboard
        </a>
      </li>
      <li class="nav-item mb-1">
        <a class="nav-link" data-bs-toggle="collapse" href="#submenu-produk" role="button" aria-expanded="false"
          aria-controls="submenu-produk">
          <i class="bi bi-box-seam me-2"></i>
          manajemen website
          <i class="bi bi-chevron-down ms-auto" style="font-size: 0.8em;"></i>
        </a>
        <div class="collapse" id="submenu-produk">
          <ul class="nav flex-column ms-4">
            <li class="nav-item"><a href="{{ url('admin/kategori') }}" class="nav-link">kategori</a></li>
            <li class="nav-item"><a href="{{ url('admin/buku') }}" class="nav-link">buku</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Anggota</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item mb-1">
        <a href="#" class="nav-link">
          <i class="bi bi-file-earmark-text me-2"></i> Pesanan
        </a>
      </li>
    </ul>
    <hr>
    <div class="p-3">
      <a href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" class="nav-link"><i
          class="bi bi-box-arrow-left me-2"></i> Logout</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </div>
</nav>