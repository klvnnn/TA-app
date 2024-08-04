@extends('layouts.app')

@section('content')
<div class="page-header">
    <h3 class="fw-bold mb-3">List Data <span class="text-info">Arsip</span></h3>
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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Daftar Semua Arsip</h4>
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
                    <th>Status</th>
                    <th style="width: 10%">Action</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($arsip as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_arsip }}</td>
                            <td>{{ $item->departement }}</td>
                            <td>{{ $item->tanggal_arsip }}</td>
                            <td>
                                @php
                                    $statusClass = '';
                                    switch ($item->status) {
                                        case 'Diproses':
                                            $statusClass = 'text-warning';
                                            break;
                                        case 'Verified':
                                            $statusClass = 'text-success';
                                            break;
                                        default:
                                            break;
                                    }
                                @endphp
                                <span class="{{ $statusClass }}">{{ $item->status }}</span>
                            </td>
                            <td>
                                <div class="form-button-action">
                                    <button
                                        type="button"
                                        data-bs-toggle="tooltip"
                                        title=""
                                        class="btn btn-link btn-primary btn-lg"
                                        data-original-title="Edit Task"
                                    >
                                        <a href="{{ route('arsip.edit', $item->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </button>
                                    <button
                                        type="button"
                                        data-bs-toggle="tooltip"
                                        title=""
                                        class="btn btn-link btn-info"
                                        data-original-title="Edit"
                                    >
                                        <a href="{{ route('arsip.show', $item->id) }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </button>
                                    <button
                                        type="button"
                                        data-bs-toggle="tooltip"
                                        title=""
                                        class="btn btn-link btn-danger"
                                        data-original-title="Remove"
                                    >
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
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