<div class="btn-group">
    <a class="btn  btn-warning btn-flat" href="{{ route('user.bumdesUser.edit', ['bumdesUser' => $data->idBumdes]) }}">
        Sunting
    </a>
    <a href='#' data-id="{{ $data->idBumdes }}" class="btn btn-danger btn-flat tombol-del">Del</a>
</div>
