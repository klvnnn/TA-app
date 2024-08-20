@extends('layouts.app')

@section('content')
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
@endif
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('dashboard/user/{id}/delete') }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title">Hapus pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="delete_id" id="id">
                    <p>Apakah anda yakin ingin menghapus user ini?</p>
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
                <h4 class="card-title mb-0">Daftar <span class="text-success">User</span></h4>
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
                        <th>Email</th>
                        <th>Role</th>
                        <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                @php
                                    $roleClass = '';
                                    switch ($item->role) {
                                        case 'admin':
                                            $roleClass = 'text-success';
                                            break;
                                        case 'archivist':
                                            $roleClass = 'text-primary';
                                            break;
                                        default:
                                            break;
                                    }
                                @endphp
                                <span class="{{ $roleClass }}">{{ $item->role }}</span>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs delete" value="{{ $item->id }}">
                                    <i class="fa fa-user-slash"></i>
                                    &nbsp;Hapus User
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
            $(document).on('click', '.delete', function(e) {
                e.preventDefault();

                var id = $(this).val();
                $('#id').val(id);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endpush