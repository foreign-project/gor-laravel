@include('partials.admin.headerdaftarusers')

@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2>Tambah User</h2>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>                                        
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row" style="padding: 30px;">
                                        <div class="col-md-12" style="padding: 5px;">
                                            <div class="form-group">
                                                <label>Nama User</label>
                                                <input type="text" name="nama" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email User</label>
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Password User</label>
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nomor Handphone</label>
                                                <input type="text" class="form-control" name="telepon" required >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Roles</label>
                                                <select name="roles" required class="form-control">
                                                    <option value="ADMIN">Admin</option>
                                                    <option value="USER">User</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-right: 40px; padding-bottom: 15px;">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success px-5">
                                                Save Now
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection