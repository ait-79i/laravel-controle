<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">

        <span class="brand-text font-weight-light">@yield('sidebare-Title', 'sidebare-Title')</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        @if (Auth::user()->admine)
            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column ">
                    <li class="nav-item menu-open">
                        <a href="{{ route('projets.index') }}">Projets</a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('projets.create') }}">Add Projet</a>
                    </li>
                </ul>
            </nav>
        @else
            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column ">

                    <li class="nav-item menu-open">
                        <a href="{{ route('inscription') }}">inscription</a>
                    </li>

                </ul>
            </nav>
        @endif




        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>
