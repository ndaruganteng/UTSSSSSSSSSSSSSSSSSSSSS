<aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="\images\profile.png" class="rounded-circle border border-2 border-dark" alt="Gambar Default">
            </div>
            <div class="info">
                <a href="#" class="d-block"> {{ Auth::User()->nama}}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                    <a href="{{route('data-user.index')}}" class="nav-link">
                        <i class="nav-icon  fa-solid fa-user"></i>
                        <p>Data User</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>