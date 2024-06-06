@extends('layouts.master')
@push('style')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Update Link Sosial Media </h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Update Link Sosial Media</h5>
                    <!-- Move the button to the right using ml-auto -->
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.sosialmedia.update', ['sosialmedia' => $data->idSiteIdentity]) }}"
                        id="basic-form" method="post" novalidate enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Instagram</label>
                            <input required type="text" name="instagram" value="{{ $data->instagram }}" id=""
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Facebook</label>
                            <input id="" name="facebook" type="text" class="form-control"
                                value="{{ $data->facebook }}"></input>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Youtube</label>
                            <input type="text" name="youtube" class="form-control" value="{{ $data->youtube }}"></input>
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
        })
    </script>
@endpush
