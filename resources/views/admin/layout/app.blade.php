@include('admin.partials._header')
    <div class="app-admin-wrap layout-sidebar-large">
        @include('admin.partials._topbar')
        @include('admin.partials._sidebar')
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            @yield('content')

            @include('admin.partials._copyright')
        </div>
    </div>
@include('admin.partials._footer')