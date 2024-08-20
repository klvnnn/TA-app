@extends('layouts.app')

@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h3 class="fw-bold mb-3">Tambah <span class="text-primary">Departement</span></h3>
                </div>
                <div class="col-12 col-xl-auto mb-3">
                    <button class="btn btn-sm btn-light text-primary" onclick="javascript:window.history.back();">
                        <i class="fa fa-arrow-left"></i>
                        &nbsp;
                        Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
@endif
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
        <div class="card-header">Tambah Departement</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('assets/img/add-departement.jpg') }}" alt=""
                        height="470px" width="550px">
                </div>
                <div class="col-6">
                    <form action="{{ route('departement.store') }}" method="POST">
                        @csrf
                        <div class="row gx-3 mb-3">
                            <div class="col-sm-12">
                            <label for="departement_id" class="col-sm-3 col-form-label">Departement</label>
                                <select name="departement_id" class="form-control form-select @error('departement_id') is-invalid @enderror selectx" id="defaultSelect">
                                    <option selected disabled >Pilih Departement</option>
                                    @foreach ($departement as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
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
                                <label class="small mb-1" for="nama">Nama</label>
                                <input class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    type="text" value="{{ old('name') }}" required autofocus />
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-12">
                                <label class="small mb-1" for="kode">Kode</label>
                                <input class="form-control @error('kode') is-invalid @enderror" name="kode"
                                    type="text" value="{{ old('kode') }}" required autofocus />
                                @error('kode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-grid mt-5">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection