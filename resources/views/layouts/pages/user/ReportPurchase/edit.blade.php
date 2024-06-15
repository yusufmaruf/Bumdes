@extends('layouts.master')
@push('style')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Edit Data Transaksi Pengeluaran</h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Edit Data Transaksi Pengeluaran</h5>
                    <!-- Move the button to the right using ml-auto -->
                </div>
                <div class="card-body">
                    <form action="{{ route('user.reportpurchaseuser.update', $data->idTransaction) }}" id="basic-form"
                        method="post" novalidate enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Unit Usaha</label>
                            <select name="idBumdes" id="select2basic" class="select2 form-select form-select form-control">
                                @foreach ($bumdes as $item)
                                    <option value="{{ $item->idBumdes }}" @if ($item->idBumdes == $data->idBumdes) selected @endif>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">tanggal</label>
                            <input required type="date" name="tanggal" id="" class="form-control"
                                value="{{ $data->tanggal }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input required type="text" name="title" id="" class="form-control"
                                value="{{ $data->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Total</label>
                            <input required type="number" name="total" id="" class="form-control"
                                value="{{ $data->total }}">
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
