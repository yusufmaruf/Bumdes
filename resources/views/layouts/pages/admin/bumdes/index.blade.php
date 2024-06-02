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
@endpush
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Data Bumdes</h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Data Bumdes</h5>
                    <!-- Move the button to the right using ml-auto -->
                    @if (auth()->user()->role == 'admin')
                        <a href="{{ route('admin.bumdes.create') }}" class="btn btn-primary ml-auto"><span
                                class="ti ti-plus me-1">
                            </span> Tambah Data</a>
                    @endif
                </div>
                <table class="table table-dt">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Usaha</th>
                            <th>Deskripsi</th>
                            <th>Logo</th>
                            <th>Lokasi</th>
                            <th>maps</th>
                            <th>jenis usaha</th>
                            <th>Nomor telephone</th>
                            <th>Email</th>
                            <th style="max-width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @includeIf('layouts.pages.admin.bumdes.modalDelete')
@endsection

@push('script')
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/datatables.min.js"></script>


    <script>
        let table; // Declare table as a global variable

        $(document).ready(function() {
            table = $('.table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('admin.bumdes.index') }}',
                },
                columns: [{
                    data: 'DT_RowIndex',
                }, {
                    data: 'name',
                    name: 'name',
                }, {
                    data: 'desc',
                    name: 'desc',
                }, {
                    data: 'image'
                }, {
                    data: 'lokasi',
                }, {
                    data: 'maps',
                }, {
                    data: 'idJenisUsaha',
                }, {
                    data: 'phoneNumber',
                }, {
                    data: 'email',
                }, {
                    data: 'aksi',
                    orderable: false,
                    searchable: false,
                }],
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.tombol-del', function(e) {
                var id = $(this).data('id');
                console.log(id);
                $.ajax({
                    url: '{{ route('admin.bumdes.show', ['bumde' => ':id']) }}'.replace(':id',
                        id),
                    type: 'GET',
                    success: function(response) {
                        $('#deletedata').modal('show');
                        // $('#idBahan').val(response.result.idBahan);
                        // Remove the existing content of namaCabang
                        $('.namaPengguna').empty();

                        // Create a new paragraph element with the updated class
                        var nameParagraph = $('<p>').addClass('namaPengguna').text('Nama: ' +
                            response.result.name);

                        // Append the new paragraph to the existing content-data div
                        $('.content-data').append(nameParagraph);

                        // Update the form action attribute
                        $('#productdelete').attr('action',
                            '/admin/bumdes/' + id);
                    }
                });

            });


        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
    </script>
@endpush