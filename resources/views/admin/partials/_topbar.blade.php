<div class="main-header">
    <div class="logo">
        <img src="/admin-assets/images/md-icon.jpg" alt="">
    </div>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div style="margin: auto"></div>
    <div class="header-part-right">
        <!-- Full screen toggle -->
        <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
        <!-- User avatar dropdown -->
        <div class="dropdown">
            <div class="user col align-self-end">
                <i class="i-Administrator cursor-pointer mr-1" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:20px"></i>
                {{-- <img src="/admin-assets/images/faces/1.jpg" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i> {{ auth()->user()->name }}
                    </div>
                    <a class="dropdown-item">Account settings</a>
                    <form action="{{ route('admin.logout') }}" method="POST" id="formLogout">
                        @csrf
                        <a href="#" class="dropdown-item" title="Logout" id="logoutBtn">Logout</a>
                        <script>
                            document.getElementById('logoutBtn').addEventListener('click', function() {
                                document.getElementById('formLogout').submit();
                            })
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
