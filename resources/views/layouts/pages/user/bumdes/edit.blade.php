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
                    <h5 class="card-title mb-0">Update Data Bumdes</h5>
                    <!-- Move the button to the right using ml-auto -->
                </div>
                <div class="card-body">
                    <form action="{{ route('user.bumdesUser.update', ['bumdesUser' => $data->idBumdes]) }}" id="basic-form"
                        method="post" novalidate enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Name <span style="color: red">*</span></label>
                            <input required type="text" name="name" id="" class="form-control"
                                value="{{ $data->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Desc</label>
                            <textarea id="summernote" name="desc" class="form-control">{{ $data->desc }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">logo</label>
                            <span class="text-danger font-weight-light text-sm  font-italic">(Masukkan photo baru jika ingin
                                untuk
                                merubahnya.)</span> <br>
                            <img src="{{ asset($data->logo) }}" class="img-thumbnail mt-3 mb-3" alt=""
                                width="100px" height="100px">
                            <input type="file" name="logo" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">lokasi</label>
                            <input type="text" name="lokasi" id="" class="form-control"
                                value="{{ $data->lokasi }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Maps</label>
                            <input type="text" name="maps" id="" class="form-control"
                                value="{{ $data->maps }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phoneNumber" id="" class="form-control"
                                value="{{ $data->phoneNumber }}">
                        </div>
                        <div class="mb-3">
                            <label for="price">Email</label>
                            <input type="email" name="email" id="price" class="form-control"
                                value="{{ $data->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label ">Jenis Usaha <span style="color: red">*</span></label>
                            <select required name="idJenisUsaha" id="select2Role"
                                class="select2 form-select form-select form-control">
                                @foreach ($dataJenisUsaha as $item)
                                    <option value="{{ $item->idJenisUsaha }}"
                                        @if ($item->idJenisUsaha == $data->idJenisUsaha) selected @endif>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label ">Penangung Jawab <span
                                    style="color: red">*</span></label>
                            <select required name="idUser" id="select2User"
                                class="select2 form-select form-select form-control">
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $data->idUser) selected @endif>
                                        {{ $item->name }}</option>
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
