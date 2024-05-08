@extends('landing.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-dark text-white">
                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/017.webp" class="card-img" alt="Stony Beach" />
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.
                        </p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                @if (Auth::check())
                <nav class="navbar bg-white">
                    <div class="container-fluid">
                        <h2 class="mx-auto">Selamat Datang {{ Auth::User()->nama}}</h2>
                    </div>
                </nav>
                @endif
            </div>
        </div>
    </div>

</div>

@endsection