@extends('layouts.app')

@section('content')
<div class="page-header">
    <h3 class="fw-bold mb-3">List Data <span class="text-danger">Surat Keluar</span></h3>
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
            <h4 class="card-title">Daftar Semua Surat</h4>
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
                    <th>nomor</th>
                    <th>departement</th>
                    <th>tanggal</th>
                    <th>status</th>
                    <th style="width: 10%">action</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($letter_out as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_arsip }}</td>
                            <td>{{ $item->departement }}</td>
                            <td>{{ $item->tanggal_arsip }}</td>
                            <td>{{ $item->$status }}</td>
                            <td>
                                <div class="form-button-action">
                                    <button
                                        type="button"
                                        data-bs-toggle="tooltip"
                                        title=""
                                        class="btn btn-link btn-primary btn-lg"
                                        data-original-title="Edit Task"
                                    >
                                        <i class="fa fa-edit"></i>
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