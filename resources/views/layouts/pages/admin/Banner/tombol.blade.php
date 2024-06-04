<div class="btn-group">
    <a class="btn  btn-warning btn-flat" href="{{ route('admin.banner.edit', ['banner' => $data->idBanner]) }}">
        Sunting
    </a>
    <a href='#' data-id="{{ $data->idBanner }}" class="btn btn-danger btn-flat tombol-del">Del</a>
</div>
