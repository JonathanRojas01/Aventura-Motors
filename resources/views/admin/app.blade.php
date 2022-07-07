@include('admin.layouts.header')

@include('admin.layouts.menu')

<main class="content">
    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-end w-100">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown ms-lg-3">
                        <a href="#" class="nav-link dropdown-toggle pt-1 px-0" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuButton1">
                            <div class="media d-flex align-items-center">
                                <i class="fa-solid fa-user fa-lg"></i>
                                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                    <span class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item d-flex align-items-center" href="#" onclick="document.formLogout.submit()">
                                <i class="fa-solid fa-arrow-right-from-bracket me-3"></i>
                                <form action="{{ route('logout') }}" method="POST" style="display: none;" name="formLogout">
                                    @csrf
                                </form>
                                Cerrar sesión
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="main-app">
        @yield('main')
    </div>
</main>


@include('admin.layouts.footer')