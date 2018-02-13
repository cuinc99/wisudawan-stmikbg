<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-list" aria-hidden="true"></i> Data Program Studi</h3>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            @if($prodis->isEmpty())
                <p align="center"><i><b>Upss!</b> anda belum menambahkan data.</i></p>
            @else
            <tr>
                <th style="width: 10px">#</th>
                <th>Alias</th>
                <th>Nama</th>
                <th>Gelar</th>
                <th>Opsi</th>
            </tr>
            @foreach($prodis as $prodi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $prodi->alias }}</td>
                    <td>{{ $prodi->nama }}</td>
                    <td>{{ $prodi->gelar }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.prodi.edit', $prodi->id) }}" data-toggle="tooltip" title="Edit Prodi" class="btn btn-default btn-xs btn-flat"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="{{ route('admin.prodi.destroy', $prodi->id) }}" data-toggle="tooltip" title="Hapus Prodi" class="btn btn-default btn-xs btn-flat"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            @endif
        </table>
    </div>
</div>