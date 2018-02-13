<div class="pull-right">
    <form action="{{ route('admin.wisudawan.removeall') }}" method="get">
        <a href="{{ route('admin.wisudawan.slide') }}" target="_blank" class="btn btn-primary btn-flat">
            <i class="fa fa-sliders" aria-hidden="true"></i> Slide Wisuda
        </a>
        <div class="btn-group">
            <button type="button" class="btn btn-success btn-flat"><i class="fa fa-database" aria-hidden="true"></i> Backup</button>
            <button type="button" class="btn btn-success btn-flat dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('admin.wisudawan.export.excel') }}" target="_blank">
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i> Data Wisudawan
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.wisudawan.downloadphoto') }}" target="_blank">
                        <i class="fa fa-download" aria-hidden="true"></i> Photo Wisudawan
                    </a>
                </li>
            </ul>
        </div>
        <button class="btn btn-danger btn-flat" type="submit" onclick="archiveFunction()">
            <i class="fa fa-trash"></i>
            Hapus Semua Data dan Photo Wisudawan?
        </button>
    </form>
</div>
<hr>
@foreach($prodis as $prodi)
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Wisudawan <b>{{ $prodi->nama }}</b></h3>
            </div>
            <div class="box-body">
                <table id="" class="table table-bordered table-striped display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Angkatan</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prodi->wisudawan as $wisudawan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $wisudawan->nim }}</td>
                            <td>{{ $wisudawan->nama }}</td>
                            <td>{{ $wisudawan->tempat_lahir }}, {{ $wisudawan->tanggal_lahir->format('d F Y') }}</td>
                            <td>{{ $wisudawan->angkatan->tahun }}</td>
                            <td>
                                <div class="btn-group">
                                    <a data-toggle="modal" title="Detail Wisudawan" class="btn btn-default btn-xs btn-flat" href="{{ url('admin/wisudawan/detail').'/'.$wisudawan->id }}" data-target="#dataModal-{{$wisudawan->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{ route('admin.wisudawan.delete',[$wisudawan->id]) }}" data-toggle="tooltip" title="Hapus Wisudawan" class="btn btn-default btn-xs btn-flat"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    @if($wisudawan->terbaik == true)
                                        <a href="{{ route('admin.wisudawan.terbaik',[$wisudawan->id]) }}" data-toggle="tooltip" title="Jadikan Sebagai Wisudawan Biasa" class="btn btn-success btn-xs btn-flat"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    @elseif($wisudawan->terbaik == false)
                                        <a href="{{ route('admin.wisudawan.terbaik',[$wisudawan->id]) }}" data-toggle="tooltip" title="Jadikan sebagai Wisudawan Terbaik" class="btn btn-default btn-xs btn-flat"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    @endif

                                    @if($wisudawan->berprestasi == true)
                                        <a href="{{ route('admin.wisudawan.berprestasi',[$wisudawan->id]) }}" data-toggle="tooltip" title="Jadikan Sebagai Wisudawan Biasa" class="btn btn-success btn-xs btn-flat"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    @elseif($wisudawan->berprestasi == false)
                                        <a href="{{ route('admin.wisudawan.berprestasi',[$wisudawan->id]) }}" data-toggle="tooltip" title="Jadikan sebagai Wisudawan Berprestasi" class="btn btn-default btn-xs btn-flat"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    @endif
                                </div>
                                <div class="modal fade" id="dataModal-{{$wisudawan->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        </div>
                                    </div>
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
@endforeach