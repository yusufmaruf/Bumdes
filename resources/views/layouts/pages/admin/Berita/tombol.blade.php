<div class="btn-group">
    <a class="btn  btn-warning btn-flat" href="{{ route('admin.berita.edit', ['beritum' => $data->idPost]) }}">
        Sunting
    </a>
    <a href='#' data-id="{{ $data->idPost }}" class="btn btn-danger btn-flat tombol-del">Del</a>
</div>
