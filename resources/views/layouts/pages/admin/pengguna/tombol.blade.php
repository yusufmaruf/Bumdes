<div class="btn-group">
    <a class="btn  btn-warning btn-flat" href="{{ route('admin.pengguna.edit', ['pengguna' => $data->id]) }}">
        Sunting
    </a>
    <a href='#' data-id="{{ $data->id }}" class="btn btn-danger btn-flat tombol-del">Del</a>
</div>
