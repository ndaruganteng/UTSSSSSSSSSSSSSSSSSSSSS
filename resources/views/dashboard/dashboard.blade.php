@extends('dashboard.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5>Selamat Datang Di Halaman Dashboard</h5>
                        {{ Auth::User()->nama}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection