@include('partials.admin.headerdaftarusers')

@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Daftar Users</h4>
                  
                <div class="row">
                    <a href="{{ route('user.create') }}" class="btn btn-info mb-3">
                        + Tambah User Baru
                    </a>
                </div>   
            </div>
            <div class="table-responsive">
                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Roles</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'kode_user', name: 'kode_user'},
                { data: 'nama', name: 'nama'},
                { data: 'email', name: 'email'},
                { data: 'telepon', name: 'telepon'},
                { data: 'roles', name: 'roles'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        })
    </script>
@endpush

