@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="card card-dark card-outline">
                        <div class="card-header" style="background-color: white;">
                            <div class="d-flex justify-content-between">
                                <h5>Data User</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datauser-table" class="table table-striped table-bordered text-center"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $p)
                                        <tr>
                                            <td>{{$p->nama}}</td>
                                            <td>{{$p->email}}</td>
                                            <td>
                                                <span class="badge badge-dark">{{$p->role}}</span>
                                            </td>
                                            <td>
                                                <a href="/data-user/hapus_user/{{ $p->id }}"
                                                    class="btn btn-danger btn-sm deleteuser">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
const deleteButtons = document.querySelectorAll('.deleteuser');
deleteButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        Swal.fire({
            title: 'Konfirmasi Hapus Data User ',
            text: 'Apakah Anda yakin ingin menghapus User ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {

                window.location.href = button.getAttribute('href');
            }
        });
    });
});
</script>

@endsection