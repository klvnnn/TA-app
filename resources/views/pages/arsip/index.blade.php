@extends('layouts.app')

@section('content')
<div class="page-header">
    <h3 class="fw-bold mb-3">List Data <span class="text-info">Arsip</span></h3>
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
            <a>List Data</a>
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
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Arsip</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus dokumen ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak, Batalkan</button>
                    <button class="btn btn-danger" type="submit">
                        <i class="far fa-trash-alt"></i> &nbsp; Ya, Hapus
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
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h4 class="card-title mb-0">Daftar Arsip</h4>
                        <a class="text-info">Note: Data teratas adalah data terbaru</a>
                    </div>
                    <div>
                        <a class="btn btn-success btn-xs me-2" href="#">
                            &nbsp;Export to Excel
                        </a>
                    </div>
                </div>
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
                    <th>Divisi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Sign By</th>
                    <th>Show</th>
                    <th>Hapus</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($arsip as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_arsip }}</td>
                            <td>{{ $item->departement }}</td>
                            <td>{{ $item->subDepartement->nama }}</td>
                            <td>{{ $item->tanggal_arsip }}</td>
                            <td>
                                @php
                                    $statusClass = '';
                                    switch ($item->status) {
                                        case 'signed':
                                            $statusClass = 'text-success';
                                            break;
                                        default:
                                            break;
                                    }
                                @endphp
                                <span class="{{ $statusClass }}">{{ $item->status }}</span>
                            </td>
                            <td>{{ $item->signedBy->name}}</td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{ route('arsip.show', $item->id) }}">
                                    <i class="fa fa-eye"></i>
                                    &nbsp;Show
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-xs delete" data-id="{{ $item->id }}" href="#">
                                    <i class="fa fa-trash"></i>
                                    &nbsp;Delete
                                </a>
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
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            var url = "{{ route('arsip.delete', ':id') }}".replace(':id', id);
            $('#deleteForm').attr('action', url);
            $('#deleteModal').modal('show');
        });
    });
</script>
@endpush