@extends('layouts.app')

@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h3 class="fw-bold mb-3"><span class="text-warning">Cek</span> Dokumen</h3>
                    Nomor Arsip: {{ ($document->no_arsip) }}
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
<div class="row gx-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Lampiran File</div>
            <div class="card-body">
                <iframe src="{{ Storage::url($document->file_arsip) }}#zoom=125"
                    frameborder="0" 
                    width="100%"
                    height="1123px">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection