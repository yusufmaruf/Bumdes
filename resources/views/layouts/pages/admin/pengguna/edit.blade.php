@extends('layouts.master')
@push('style')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Edit Data Pengguna</h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Edit Data Pengguna</h5>
                    <!-- Move the button to the right using ml-auto -->
                </div>
                <div class="card-body">
                    <form
                        action="{{ auth()->user()->role == 'admin' ? route('admin.pengguna.update', $data->id) : route('user.profilepengguna.update', $data->id) }}"
                        id="basic-form" method="post" novalidate enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input required type="text" name="name" id="" class="form-control"
                                value="{{ $data->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input required type="email" name="email" id="" class="form-control"
                                value="{{ $data->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <span class="text-danger font-weight-light text-sm  font-italic">(Masukkan password jika ingin
                                merubahnya.)</span>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phone" id="" class="form-control"
                                value="{{ $data->phone }}">
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
                            <label for="price">address</label>
                            <input type="text" name="address" id="price" class="form-control"
                                value="{{ $data->address }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Gender</label>
                            <select name="gender" id="select2basic" class="select2 form-select form-select form-control">
                                <option value="Laki - laki" @if ($data->gender == 'Laki - laki') selected @endif>Laki - laki
                                </option>
                                <option value="Perempuan" @if ($data->gender == 'Perempuan') selected @endif>Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Role</label>
                            <select name="role" id="select2Role" class="select2 form-select form-select form-control">
                                <option value="admin" @if ($data->role == 'admin') selected @endif>Admin
                                </option>
                                <option value="user" @if ($data->role == 'user') selected @endif>User
                                </option>
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
