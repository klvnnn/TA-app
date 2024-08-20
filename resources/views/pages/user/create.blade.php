@extends('layouts.app')

@section('content')
<div class="page-header">
    <h3 class="fw-bold mb-3">Tambah <span class="text-success">User</span></h3>
    <ul class="breadcrumbs mb-3">
        <li class="nav-home">
            <a href="#">
            <i class="icon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
            <a href="#">Tables</a>
        </li>
        <li class="separator">
            <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
            <a href="#">Datatables</a>
        </li>
    </ul>
</div>
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button class="btn-close" type="button" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
@endif
<div class="container-xl px-4 mt-4">
    <div class="card mb-4">
        <div class="card-header">Tambah Pengguna</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('assets/img/add_user.jpg') }}" alt=""
                        height="470px" width="500px">
                </div>
                <div class="col-6">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="row gx-3 mb-3">
                            <div class="col-md-12">
                                <label class="small mb-1" for="role">Role</label>
                                <select name="role" class="form-control" required>
                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>admin</option>
                                    <option value="archivist" {{ old('role') == 'archivist' ? 'selected' : '' }}>archivist</option>
                                </select>
                            </div>
                            @error('role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-12">
                                <label for="departement_id" class="small mb-1">Departement</label>
                                <select name="departement_id" class="form-control form-select @error('departement_id') is-invalid @enderror selectx" id="defaultSelect">
                                    @foreach ($departement as $item)
                                        <option selected  value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('departement_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-12">
                                <label class="small mb-1" for="name">Nama</label>
                                <input class="form-control @error('name') is-invalid @enderror" name="name"
                                    type="text" value="{{ old('name') }}" required autofocus />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label class="small mb-1" for="email">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email"
                                    type="email" value="{{ old('email') }}" required />
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label class="small mb-1" for="password">Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" name="password"
                                    type="password" id="password" required />
                                <input type="checkbox" onclick="myFunction()" class="mt-2"> <label
                                    class="small mb-1" for="checkbox">Show Password</label>
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("password");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                </script>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-grid mt-5">
                            <button type="submit" class="btn btn-primary">Tambah Pengguna Baru</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection