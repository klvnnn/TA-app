@extends('layouts.app')

@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h3 class="fw-bold mb-3">Verify <span class="text-info">Signature</span></h3>
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
<div class="container-xl px-4 mt-4">
    <div class="card mb-4">
        <center>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('assets/img/close.png') }}" alt=""
                            height="400px" width="400px">
                        <p class="text-danger">Signature tidak valid!</p>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>
@endsection