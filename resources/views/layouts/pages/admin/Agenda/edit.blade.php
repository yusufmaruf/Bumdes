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
                    <form action="{{ route('admin.agenda.update', ['agenda' => $data->idAgenda]) }}" id="basic-form"
                        method="post" novalidate enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input required type="text" name="name" id="" class="form-control"
                                value="{{ $data->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Photo</label>
                            <span class="text-danger font-weight-light text-sm  font-italic">(Masukkan photo baru jika ingin
                                untuk
                                merubahnya.)</span> <br>
                            <img src="{{ asset($data->photo) }}" class="img-thumbnail mt-3 mb-3" alt=""
                                width="100px" height="100px">
                            <input required type="file" name="photo" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Desc</label>
                            <textarea id="summernote" name="desc" class="form-control">{{ $data->desc }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">location</label>
                            <input required type="text" name="location" id="" class="form-control"
                                value="{{ $data->location }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Waktu Mulai</label>
                            <input required type="datetime-local" name="waktuMulai" id="" class="form-control"
                                value="{{ $data->waktuMulai }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Waktu Selesai</label>
                            <input required type="datetime-local" name="waktuSelesai" id="" class="form-control"
                                value="{{ $data->waktuSelesai }}">
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
