@extends('layouts.master')
@push('style')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Tambah Pengguna</h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Tambah Data Pengguna</h5>
                    <!-- Move the button to the right using ml-auto -->
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.pengguna.store') }}" id="basic-form" method="post" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input required type="text" name="name" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input required type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input required type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Phone</label>
                            <input required type="text" name="phone" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Photo</label>
                            <input required type="file" name="photo" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price">address</label>
                            <input type="text" name="address" id="price" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Gender</label>
                            <select name="gender" id="select2basic" class="select2 form-select form-select form-control">
                                <option value="Laki - laki">Laki - laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Role</label>
                            <select name="role" id="select2Role" class="select2 form-select form-select form-control">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button required type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/vendor/libs/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>

    <script>
        $(function() {
            $('#summernote').summernote()
            $('#select2basic').select2({
                placeholder: 'Pilih Gender',
            })
            $('#select2Role').select2({
                placeholder: 'Pilih Role',
            })
        })
    </script>
@endpush
