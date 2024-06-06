<div class="btn-group">
    <a class="btn  btn-warning btn-flat" href="{{ route('admin.gallery.edit', ['gallery' => $data->idGallery]) }}">
        Sunting
    </a>
    <a href='#' data-id="{{ $data->idGallery }}" class="btn btn-danger btn-flat tombol-del">Del</a>
</div>
