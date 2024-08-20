@extends('layouts.app')

@section('content')
<div class="page-header">
    <h3 class="fw-bold mb-3"><span class="text-warning">Signature</span> / Verification Dokumen</h3>
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
            <a>Verification</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Daftar Arsip</h4>
            <a class="text-info">Note: Data teratas adalah data terbaru</a>
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
                    <th>Nomor</th>
                    <th>Departement</th>
                    <th>Divisi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Sign By</th>
                    <th style="width: 10%">Action</th>
                    <th>Cek Otentikasi</th>
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
                                        case 'diproses':
                                            $statusClass = 'text-warning';
                                            break;
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
                                <div class="form-button-action">
                                    <a class="btn btn-primary btn-xs" href="{{ route('arsip.show', $item->id) }}">
                                        <i class="fa fa-eye"></i>
                                        &nbsp;Show
                                    </a>
                                </div>
                            </td>
                            <td>
                                <center>
                                    <a class="btn btn-primary btn-xs" href="{{ route('sign.verify', $item->id) }}">
                                        <i class="fa fa-clipboard-check"></i>
                                        &nbsp;Verify Signature
                                    </a>
                                </center>
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