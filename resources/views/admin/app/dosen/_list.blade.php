<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Dosen Pembimbing</h3>
            </div>
            <div class="box-body">
                <table id="" class="table table-bordered table-striped display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dosens as $dosen)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dosen->nik }}</td>
                            <td>{{ $dosen->nama }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.dosen.edit', $dosen->id) }}" data-toggle="tooltip" title="Edit Dosen" class="btn btn-default btn-xs btn-flat"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="{{ route('admin.dosen.destroy', $dosen->id) }}" data-toggle="tooltip" title="Hapus Dosen" class="btn btn-default btn-xs btn-flat"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>