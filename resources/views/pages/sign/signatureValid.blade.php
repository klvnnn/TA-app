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
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('assets/img/ok-concept-illustration.png') }}" alt=""
                        height="470px" width="500px">
                    </div>
                    <div class="col-6">
                    <center>
                        <p class="text-success">Signature is valid!</p>
                    </center>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-12">
                            <label for="signature" class="form-label">{{ __('Signature') }}</label>
                            <textarea class="form-control" id="signature" rows="5" disabled>
                                {{ old('signature', $document->signature ) }}
                            </textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label class="small mb-1" for="email">Dokumen ditandatangani oleh: <span class="text-info">{{$document->signedBy->name}}</span></label>
                        </div>
                    </div>
                    {{-- <div class="row gx-3 mb-3">
                        <div class="col-md-12">
                            <label for="signature" class="form-label">{{ __('Public Key') }}</label>
                            <textarea class="form-control" id="signature" rows="5" disabled>
                                {{ old('signature', $document->signedBy->public_key) }}
                            </textarea>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection