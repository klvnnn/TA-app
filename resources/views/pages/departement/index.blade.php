@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Daftar <span class="text-primary"> Departement</span></h4>
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
                        <th>Name</th>
                        <th>Kode</th>
                        <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departement as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kode }}</td>
                            <td>
                                <div class="form-button-action">
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