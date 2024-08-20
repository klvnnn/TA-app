@extends('layouts.app')

@section('content')
<div class="page-header">
    <h3 class="fw-bold mb-3">Tambah Dokumen <span class="text-info">Arsip</span></h3>
    <ul class="breadcrumbs mb-3">
        <li class="nav-home">
            <a href="{{ route('dashboard') }}">
            <i class="icon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
            <a>Kelola Arsip</a>
        </li>
        <li class="separator">
            <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
            <a>Tambah Dokumen</a>
        </li>
    </ul>
</div>
<div class="container-fluid px-4">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
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
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{ route('arsip.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row gx-4">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>
                            Input Data Arsip
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="no_arsip" class="col-sm-3 col-form-label">No. Arsip</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"
                                    value="{{ old('no_arsip') }}" name="no_arsip" placeholder="Nomor Arsip"
                                    required>
                            </div>
                            @error('no_arsip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <label for="tanggal_arsip" class="col-sm-3 col-form-label">Tanggal Arsip</label>
                            <div class="col-sm-9">
                                <input type="date"
                                    class="form-control @error('tanggal_arsip') is-invalid @enderror"
                                    value="{{ old('tanggal_arsip') }}" name="tanggal_arsip" required>
                            </div>
                            @error('tanggal_arsip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <label for="departement" class="col-sm-3 col-form-label">Departement</label>
                            <div class="col-sm-9">
                                <select name="departement" class="form-control form-select @error('departement') is-invalid @enderror selectx" id="defaultSelect">
                                    <option selected >{{ $departementName }}</option>
                                </select>
                            </div>
                            @error('departement')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <label for="sub_departement_id" class="col-sm-3 col-form-label">Divisi</label>
                            <div class="col-sm-9">
                                <select name="sub_departement_id" class="form-control form-select @error('sub_departement_id') is-invalid @enderror selectx" id="defaultSelect">
                                    <option selected disabled>Pilih Divisi</option>
                                    @foreach ($subDepartements as $subDepartement)
                                        <option value="{{ $subDepartement->id }}">{{ $subDepartement->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('sub_departement_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <label for="file_arsip" class="col-sm-3 col-form-label">File Arsip</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control @error('file_arsip') is-invalid @enderror" value="{{ old('file_arsip') }}"name="file_arsip">
                                <div id="file_arsip" class="form-text">Upload File : pdf</div>
                            </div>
                            @error('file_arsip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <label for="archives" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection