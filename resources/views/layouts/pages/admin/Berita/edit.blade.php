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
                            <label for="">Photo</label>
                            <input required type="file" name="photo" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Desc</label>
                            <textarea id="summernote" name="desc" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">location</label>
                            <input required type="text" name="location" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">tanggal</label>
                            <input required type="date" name="date" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Waktu Mulai</label>
                            <input required type="date" name="waktuMulai" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Waktu Selesai</label>
                            <input required type="date" name="waktuSelesai" id="" class="form-control">
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
        })
    </script>
@endpush
