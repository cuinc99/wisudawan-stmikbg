<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-list" aria-hidden="true"></i> Data Tahun Angkatan</h3>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            @if($angkatans->isEmpty())
                <p align="center"><i><b>Upss!</b> anda belum menambahkan data.</i></p>
            @else
            <tr>
                <th style="width: 10px">#</th>
                <th>Tahun</th>
                <th>Jumlah Wisudawan</th>
                <th>Opsi</th>
            </tr>
            @foreach($angkatans as $angkatan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $angkatan->tahun }}</td>
                    @if(!count($angkatan->wisudawan) == 0)
                    <td>{{ count($angkatan->wisudawan) }} Orang</td>
                    @else
                        <td>Belum ada</td>
                    @endif
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.angkatan.edit', $angkatan->id) }}" data-toggle="tooltip" title="Edit Angkatan" class="btn btn-default btn-xs btn-flat"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="{{ route('admin.angkatan.destroy', $angkatan->id) }}" data-toggle="tooltip" title="Hapus Angkatan" class="btn btn-default btn-xs btn-flat"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            @endif
        </table>
    </div>
</div>