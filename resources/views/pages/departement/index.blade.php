@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title">Daftar <span class="text-primary"> Divisi</span></h4>
                    <a class="btn btn-info btn-xs" href="{{ route('departement.create') }}">
                        &nbsp;Tambah Divisi
                    </a>
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
                        <th>No</th>
                        <th>Departement</th>
                        <th>Name</th>
                        <th>Kode</th>
                        <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departement as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->departement->nama }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kode }}</td>
                            <td>
                                <div class="form-button-action">
                                    <a class="btn btn-danger btn-xs" href="#">
                                        <i class="fa fa-times"></i>
                                        &nbsp;Hapus
                                    </a>
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