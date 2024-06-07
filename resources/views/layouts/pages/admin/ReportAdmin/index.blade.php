@extends('layouts.master')

<!-- Vendors CSS -->
@push('style')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
@endpush
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Data Gallery</h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Data Transaksi</h5>

                    <!-- Move the button to the right using ml-auto -->
                </div>
                <form id="form-filter" class="m-3" method="get">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">BUMDES</label>
                        <select name="idBumdes" id="select2Role" class="select2 form-select form-select form-control">
                            <option value="">Pilih Bumdes</option>
                            @foreach ($data as $item)
                                {
                                <option value="{{ $item->idBumdes }}">{{ $item->name }}</option>
                                }
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <label class="form-label">Dari Tanggal</label>
                            <input type="date" id="dari" name="dari" class="form-control flatpickr"
                                value="" />
                        </div>
                        <div class="col-md-5">
                            <label class="form-label">Sampai Tanggal</label>
                            <input type="date" id="sampai" name="sampai" class="form-control flatpickr"
                                value="" />
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100 mt-4">Filter</button>
                        </div>
                    </div>
                </form>
                <a id="download-link" class="btn btn-vimeo d-flex m-4"
                    href="{{ route('admin.reportpurchaseadmin.index') }}?dari=&sampai=">Download
                    Laporan</a>

                <table class="table table-dt">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Bumdes</th>
                            <th>Pemasukan</th>
                            <th>Pengeluaran</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @includeIf('layouts.pages.admin.gallery.modalDelete')
@endsection

@push('script')
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/datatables.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>


    <script>
        let table; // Declare table as a global variable

        $(document).ready(function() {
            $('#select2Role').select2({
                placeholder: 'Pilih Bumdes',
            })
            table = $('.table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('admin.reportAdmin.index') }}',
                    data: function(d) {
                        d.bumdes = $('#select2Role').val();
                        d.dari = $('#dari').val();
                        d.sampai = $('#sampai').val();
                    }
                },
                columns: [{
                    data: 'DT_RowIndex',
                }, {
                    data: 'tanggal',
                }, {
                    data: 'bumdes',
                }, {
                    data: 'Pemasukan',
                }, {
                    data: 'Pengeluaran',
                }],
            });
            $('#form-filter').on('submit', function(e) {
                e.preventDefault();
                table.ajax.reload(); // Reload the table data with the new filter parameters
            });

        });
    </script>
@endpush
