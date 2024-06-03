<div class="btn-group">
    <a class="btn  btn-warning btn-flat" href="{{ route('admin.agenda.edit', ['agenda' => $data->idAgenda]) }}">
        Sunting
    </a>
    <a href='#' data-id="{{ $data->idAgenda }}" class="btn btn-danger btn-flat tombol-del">Del</a>
</div>
