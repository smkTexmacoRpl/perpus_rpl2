<header class="navbar navbar-expand-lg bg-body-tertiary shadow-sm sticky-top">
        <div class="container-fluid">
                <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#sidebarAdmin" aria-controls="sidebarAdmin">
                        <i class="bi bi-list"></i>
                </button>

                <form class="d-flex ms-auto d-none d-md-flex">
                        <input class="form-control me-2" type="search" placeholder="Cari sesuatu..."
                                aria-label="Search">
                </form>

                <ul class="navbar-nav ms-3">
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="{{ asset('assets/images/worker.png')}}" alt="Avatar"
                                                class="rounded-circle" width="30" height="30">
                                        <span
                                                class="d-none d-sm-inline ms-1">@if(Auth::check()){{Auth::user()->name}}@endif</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Profil</a></li>
                                        <li>
                                                <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">Logout</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                        </form>
                                </ul>
                        </li>
                </ul>
        </div>
</header>