<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Detail Wisudawan</h4>
</div>
<div class="modal-body" id="wisudawan_detail">
    <table class="table table-striped">
        <tr>
            <th style="width: 10px">Photo</th>
            <th style="width: 10px">:</th>
            <td>
                @if(is_null($wisudawan->photo))
                    <img src="{{ asset('/photo-not-available.jpg') }}" width="50%" alt="photo-not-available">
                @else
                    @if(file_exists( public_path().'/photo/'.$wisudawan->photo ))
                        <img src="{{ asset('/photo/'.$wisudawan->photo) }}" width="50%" alt="Photo">
                    @else
                        <img src="{{ asset('/photo-not-available.jpg') }}" width="50%" alt="photo-not-available">
                    @endif
                @endif
            </td>
        </tr>
        <tr>
            <th style="width: 10px">Nim</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->nim }}</td>
        </tr>
        <tr>
            <th style="width: 10px">Nama</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->nama }}</td>
        </tr>
        <tr>
            <th style="width: 10px">TTL</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->tempat_lahir.', '.$wisudawan->tanggal_lahir->format('d F Y') }}</td>
        </tr>
        <tr>
            <th style="width: 10px">Alamat</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->alamat }}</td>
        </tr>
        <tr>
            <th style="width: 10px">No. Hp</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->hp }}</td>
        </tr>
        <tr>
            <th style="width: 10px">Email</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->email }}</td>
        </tr>
        <tr>
            <th style="width: 10px">IPK</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->ipk }}</td>
        </tr>
        <tr>
            <th style="width: 10px">Judul TA/Skripsi</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->judul }}</td>
        </tr>
        <tr>
            <th style="width: 10px">Prodi</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->prodi->nama }}</td>
        </tr>
        <tr>
            <th style="width: 10px">Angkatan</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->angkatan->tahun }}</td>
        </tr>
        <tr>
            <th style="width: 10px">Dosen</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->dosen->nama }}</td>
        </tr>
        <tr>
            <th style="width: 10px">Password</th>
            <th style="width: 10px">:</th>
            <td>{{ $wisudawan->p }}</td>
        </tr>
    </table>
</div>