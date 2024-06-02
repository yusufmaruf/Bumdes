@extends('layouts.master')
@push('style')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Tambah Bumdes</h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Tambah Data Bumdes</h5>
                    <!-- Move the button to the right using ml-auto -->
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.bumdes.store') }}" id="basic-form" method="post" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name <span style="color: red">*</span></label>
                            <input required type="text" name="name" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Desc</label>
                            <textarea id="summernote" name="desc" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">logo</label>
                            <input type="file" name="logo" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">lokasi</label>
                            <input type="text" name="lokasi" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Maps</label>
                            <input type="text" name="maps" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phone" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price">Email</label>
                            <input type="email" name="email" id="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label ">Jenis Usaha <span style="color: red">*</span></label>
                            <select required name="role" id="select2Role"
                                class="select2 form-select form-select form-control">
                                @foreach ($data as $item)
                                    <option value="{{ $item->idJenisUsaha }}">{{ $item->name }}</option>
                                @endforeach
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

            $('#select2Role').select2({
                placeholder: 'Pilih Role',
            })
        })
    </script>
@endpush
