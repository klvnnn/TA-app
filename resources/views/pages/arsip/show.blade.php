@extends('layouts.app')

@section('content')
<div class="page-header">
    <h3 class="fw-bold mb-3">Dokumen <span class="text-info">Arsip</span></h3>
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
<div class="row gx-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Lampiran File Arsip</div>
            <div class="card-body">
                <iframe src="{{ Storage::url($arsip->file_arsip) }}#zoom=125"
                    frameborder="0" 
                    width="100%"
                    height="1123px">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection