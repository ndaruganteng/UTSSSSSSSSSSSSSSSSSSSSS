<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <span class="navbar-brand mb-0 h1">Tugas UTS</span>

        <!-- Toggle button -->
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                </li> -->
            </ul>
            @if (Auth::check())
            <div class="d-flex align-items-center">
                <form action="/logout">
                    <button type="submit" class="btn btn-danger px-3 me-2" data-mdb-ripple-init>Logout</button>
                </form>
            </div>
            @else
            <div class="d-flex align-items-center">
                <a href="{{ route('login.index') }}" class="btn btn-link px-3 me-2" data-mdb-ripple-init>Login</a>
                <a href="{{ route('register.index') }}" class="btn btn-primary me-3" data-mdb-ripple-init>Register</a>
            </div>
            @endif
        </div>
    </div>
</nav>
<!-- Navbar -->