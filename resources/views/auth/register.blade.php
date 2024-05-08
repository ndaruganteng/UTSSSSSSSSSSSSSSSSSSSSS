<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas UTS</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Tugas UTS</span>
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample"
                aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li> -->
                </ul>
                <div class="d-flex align-items-center">
                    <a href="{{route('login.index')}}" data-mdb-ripple-init type="button"
                        class="btn btn-link px-3 me-2">
                        Login
                    </a>
                    <a href="{{route('register.index')}}" data-mdb-ripple-init type="button"
                        class="btn btn-primary me-3">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Register</h3>
                            <form action="{{ route('register.store') }}" method="post">
                                @csrf
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" name="nama" class="form-control form-control-lg" />
                                    <label class="form-label">Nama</label>
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" name="email" class="form-control form-control-lg" />
                                    <label class="form-label">Email</label>
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" name="password" class="form-control form-control-lg" />
                                    <label class="form-label">Password</label>
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                            </form>
                            <hr class="my-4">
                            <div class="row">
                                <small>Sudah punya akun? <a href="{{route('login.index')}}">Login</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js">
    </script>
</body>

</html>