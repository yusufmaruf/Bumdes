@extends('layouts.master')
@push('style')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Update Data Gallery</h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Update Data Gallery</h5>
                    <!-- Move the button to the right using ml-auto -->
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.gallery.update', ['gallery' => $data->idGallery]) }}" id="basic-form"
                        method="post" novalidate enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input required type="text" name="name" id="" class="form-control"
                                value="{{ $data->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Photo</label> <span
                                class="text-danger font-weight-light text-sm  font-italic">(Masukkan photo baru jika ingin
                                untuk
                                merubahnya.)</span> <br>
                            <img src="{{ asset($data->photo) }}" class="img-thumbnail mt-3 mb-3" alt=""
                                width="100px" height="100px">
                            <input type="file" name="photo" id="" class="form-control mt-2">
                        </div>
                        <div class="mb-3">
                            <label for="">Vidio</label>
                            <input required type="text" name="name" id="" class="form-control"
                                value="{{ $data->vidio }}">
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
