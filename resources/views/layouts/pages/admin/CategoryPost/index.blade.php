@extends('layouts.master')
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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Kategori Berita</h4>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Data Kategori Berita</h5>
                    <!-- Move the button to the right using ml-auto -->
                    <button onclick="tambahData()" type="button" class="btn btn-primary ml-auto"><span
                            class="ti ti-plus me-1">
                        </span> Tambah Data</button>
                </div>
                <table class="datatables-basic table">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th>Nama Kategori</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @includeIf('layouts.pages.admin.CategoryPost.modal')
@endsection

@push('script')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    {{-- script view data  --}}
    <script>
        let table; // Declare table as a global variable
        $(document).ready(function() {
            table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.categoryPost.index') }}",
                columns: [{
                    data: 'DT_RowIndex',
                }, {
                    data: 'title',
                }, {
                    data: 'aksi',
                    orderable: false,
                    searchable: false,
                }],

            });
        });
    </script>
    {{-- muncul form tambah data  --}}
    <script>
        function tambahData() {
            $('#tambahdata').modal('show');
        }
    </script>
    {{-- update data  --}}
    <script>
        $(document).ready(function() {
            $('body').on('click', '.tombol-edit', function(e) {
                var id = $(this).data('id');
                $.ajax({
                    url: '{{ route('admin.categoryPost.show', ['categoryPost' => ':id']) }}'
                        .replace(
                            ':id',
                            id),
                    type: 'GET',
                    success: function(response) {
                        $('#editdata').modal('show');
                        $('#titleedit').val(response.result.title);
                        console.log(response.result.idBahan);
                        $('#updatedata').attr('action',
                            '{{ route('admin.categoryPost.update', ['categoryPost' => ':id']) }}'
                            .replace(':id',
                                id));

                    }
                });
            });
        });
    </script>
    {{-- delete data  --}}
    <script>
        $(document).ready(function() {
            $('body').on('click', '.tombol-del', function(e) {
                var id = $(this).data('id');
                $.ajax({
                    url: '{{ route('admin.categoryPost.show', ['categoryPost' => ':id']) }}'
                        .replace(
                            ':id',
                            id),
                    type: 'GET',
                    success: function(response) {
                        $('#deletedata').modal('show');
                        // $('#idBahan').val(response.result.idBahan);
                        $('.title').empty();

                        // Create a new paragraph element with the updated class
                        var nameParagraph = $('<p>').addClass('title').text('Nama: ' +
                            response.result.title);

                        // Append the new paragraph to the existing content-data div
                        $('.content-data').append(nameParagraph);

                        // Update the form action attribute
                        $('#deleteModal').attr('action',
                            '/admin/categoryPost/' + id);
                    }
                });
            });
        });
    </script>
@endpush
