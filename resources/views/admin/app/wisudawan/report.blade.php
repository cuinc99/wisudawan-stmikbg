<html>
    <table border="1">
        <tr>
            <th style="background-color: #b2dfdb;">NIM</th>
            <th style="background-color: #b2dfdb;">Nama</th>
            <th style="background-color: #b2dfdb;">TTL</th>
            <th style="background-color: #b2dfdb;">Alamat</th>
            <th style="background-color: #b2dfdb;">Nomor Hp</th>
            <th style="background-color: #b2dfdb;">IPK</th>
            <th style="background-color: #b2dfdb;">Email</th>
            <th style="background-color: #b2dfdb;">Program Studi</th>
            <th style="background-color: #b2dfdb;">Angkatan</th>
            <th style="background-color: #b2dfdb;">Dosen Pembimbing</th>
            <th style="background-color: #b2dfdb;">Judul Skripsi/TA</th>
        </tr>
        @foreach($wisudawans as $wisudawan)
        <tr>
            <td>{{ $wisudawan->nim }}</td>
            <td>{{ $wisudawan->nama }}</td>
            <td>{{ $wisudawan->tempat_lahir }}, {{ $wisudawan->tanggal_lahir->format('d F Y') }}</td>
            <td>{{ $wisudawan->alamat }}</td>
            <td>{{ $wisudawan->hp }}</td>
            <td>{{ $wisudawan->ipk }}</td>
            <td>{{ $wisudawan->email }}</td>
            <td>{{ $wisudawan->prodi->nama }}</td>
            <td>{{ $wisudawan->angkatan->tahun }}</td>
            <td>{{ $wisudawan->dosen->nama }}</td>
            <td>{{ $wisudawan->judul }}</td>
        </tr>
        @endforeach
    </table>
</html>