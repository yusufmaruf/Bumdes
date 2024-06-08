@extends('layouts.master')
@push('style')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Update Data Visi, Misi, Regulasi </h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Update Data Visi, Misi, Regulasi</h5>
                    <!-- Move the button to the right using ml-auto -->
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.visimisi.update', ['visimisi' => $data->idSiteIdentity]) }}"
                        id="basic-form" method="post" novalidate enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Visi</label>
                            <textarea id="summernotevisi" name="visi" class="form-control">{{ $data->visi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Misi</label>
                            <textarea id="summernotemisi" name="misi" class="form-control" value="">{{ $data->misi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Regulasi</label>
                            <textarea id="summernoteregulasi" name="regulasi" class="form-control" value="">{{ $data->regulasi }}</textarea>
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
            $('#summernotevisi').summernote()
            $('#summernotemisi').summernote()
            $('#summernoteregulasi').summernote()
        })
    </script>
@endpush
