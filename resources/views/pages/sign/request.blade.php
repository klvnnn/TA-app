@extends('layouts.app')

@section('content')
<div class="page-header">
    <h3 class="fw-bold mb-3">Request <span class="text-warning">Signature</span> List</h3>
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
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('dashboard/sign/dokumen/{id}/reject') }}" method="POST" class="d-inline" id="rejectForm">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tolak Dokumen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="reject_id" id="id">
                    <p class="mt-1 text-sm text-dark">
                        {{ __('Apakah anda yakin ?') }}
                    </p>
                    <p class="mt-1 text-sm text-dark">
                        {{ __('Berikan catatan penolakan:') }}
                    </p>
                    <textarea name="rejection_note" id="rejection_note" class="form-control" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak, Batalkan</button>
                    <button class="btn btn-danger" type="submit">
                        <i class="far fa-trash-alt"></i> &nbsp; Ya, Tolak Dokumen
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Dokumen Signature Request</h4>
            <a class="text-info">Note: Pastikan data dokumen dengan benar</a>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table
                id="basic-datatables"
                class="display table table-striped table-hover"
                >
                <thead>
                    <tr>
                    <th>id</th>
                    <th>Nomor Arsip</th>
                    <th>Departement</th>
                    <th>Tanggal</th>
                    <th>Show</th>
                    <th>Sign</th>
                    <th>Tolak</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($signRequest as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_arsip }}</td>
                            <td>{{ $item->departement }}</td>
                            <td>{{ $item->tanggal_arsip }}</td>
                            <td>
                                <center>
                                    <a class="btn btn-primary btn-xs" href="{{ route('sign.show', $item->id) }}">
                                        <i class="fa fa-eye"></i>
                                        &nbsp;Show
                                    </a>
                                </center>
                            </td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('sign.document', $item->id) }}">
                                    <i class="fa fa-file-signature"></i>
                                    &nbsp;Sign Document
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs reject" value="{{ $item->id }}">
                                    <i class="fa fa-times"></i>
                                    &nbsp;Tolak
                                </button>
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
@endsection
@push('alert-script')
<script>
    $(document).ready(function() {
        $(document).on('click', '.reject', function(e) {
            e.preventDefault();

            var id = $(this).val();
            $('#id').val(id);
            $('#rejectModal').modal('show');
        });
    });
</script>
@endpush