<!-- Add New Address Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="address-title mb-2">Tambah Kategori Berita</h3>
                    <p class="text-muted address-subtitle">Silahkan masukan data tambah Kategori Berita</p>
                </div>
                <form id="addNewAddressForm" class="row g-3" action="{{ route('admin.categoryPost.store') }}"
                    method="post" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="form-label" for="modalAddressFirstName">Nama Kategori</label>
                        <input type="text" id="name" name="title" class="form-control" />
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Add New Address Modal -->

{{-- edit data modal --}}
<div class="modal fade" id="editdata" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="address-title mb-2">Edit Kategori</h3>
                    <p class="text-muted address-subtitle">Silahka Edit Data Kategori</p>
                </div>
                <form id="updatedata" class="row g-3" method="POST" novalidate enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="col-12">
                        <label class="form-label" for="modalAddressFirstName">Nama Kategori</label>
                        <input type="text" id="titleedit" name="title" class="form-control" />
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- end data model  --}}
<div class="modal fade" id="deletedata" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center content-data mb-4">
                    <h3 class="address-title mb-2">Delete Kategori</h3>
                    <p class="text-muted address-subtitle">apakah anda yakin akan menghapus data kategori</p>
                </div>
                <form id="deleteModal" class="row g-3" method="POST" novalidate enctype="multipart/form-data">
                    @method('DELETE')
                    @csrf
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
