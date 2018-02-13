<section class="bg-gradient-r aligncenter">
            <span class="background light" style="background: #44A08D;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #093637, #44A08D);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #093637, #44A08D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
"></span>
    <div class="wrap">
        <ul class="flexblock">
            <li>
                <img class="img aligncenter size-20" align="middle" src="{{ asset('/slide/logo_stiba.png') }}" alt="STMIKBG">
            </li>
        </ul>
        <h2 class="text-landing text-shadow"><strong>{{ $setting->stiba_judul }}</strong></h2>
        <h5 class="text-landing text-shadow"><strong>{!! $setting->stiba_deskripsi  !!}</strong></h5>
    </div>
</section>

@foreach($prodis as $prodi)
    @if($prodi->kampus == 'stibabg' AND !$prodi->wisudawan->isEmpty())
    <section class="bg-gradient-r aligncenter">
            <span class="background light" style="{{ $prodi->color }}"></span>
        <div class="wrap">
            <ul class="flexblock">
                <li>
                    <img class="img aligncenter size-20" src="{{ asset('/slide/logo_stiba.png') }}" alt="STIBABG">
                </li>
            </ul>
            <h2 class="text-landing text-shadow"><strong>PROGRAM STUDI</strong></h2>
            <h4 class="text-landing text-shadow"><strong>{{ $prodi->nama }}</strong></h4>
        </div>
    </section>

    @foreach($prodi->wisudawan()->orderBy('angkatan_id', 'desc', 'nim')->get() as $wisudawan)
        @if($wisudawan->terbaik == false && $wisudawan->berprestasi == false)
            <section class="fullscreen bg-gradient-v" style="{{ $prodi->color }}">
                <div class="card-30">
                    <figure>
                        @if(is_null($wisudawan->photo))
                            <img src="{{ asset('/photo-not-available.jpg') }}" width="50%" alt="photo-not-available">
                        @else
                            @if(file_exists( public_path().'/photo/'.$wisudawan->photo ))
                                <img src="{{ asset('/photo/'.$wisudawan->photo) }}" width="50%" alt="Photo">
                            @else
                                <img src="{{ asset('/photo-not-available.jpg') }}" width="50%" alt="photo-not-available">
                            @endif
                        @endif
                    </figure>
                    <!-- end figure-->
                    <div class="flex-content">
                        <h2 class="aligncenter">{{ $wisudawan->nama }}, {{ $wisudawan->prodi->gelar }}</h2>
                        <p class="aligncenter">{{ $wisudawan->nim }}</p>
                        <table>
                            <tbody>
                            <tr>
                                <td>TTL</td>
                                <td>➭</td>
                                <td>{{ $wisudawan->tempat_lahir }}, {{ $wisudawan->tanggal_lahir->format('d F Y') }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>➭</td>
                                <td>{{ $wisudawan->alamat }}</td>
                            </tr>
                            <tr>
                                <td>No. Hp</td>
                                <td>➭</td>
                                <td>{{ $wisudawan->hp }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>➭</td>
                                <td>{{ $wisudawan->email }}</td>
                            </tr>
                            <tr>
                                <td>IPK</td>
                                <td>➭</td>
                                <td>{{ $wisudawan->ipk }}</td>
                            </tr>
                            <tr>
                                <td>Dosen Pembimbing</td>
                                <td>➭</td>
                                <td>{{ $wisudawan->dosen->nama }}</td>
                            </tr>
                            <tr>
                                <td>Judul Skripsi/TA</td>
                                <td>➭</td>
                                <td>{{ $wisudawan->judul }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <p class="text-symbols">* * *</p>
                    </div>
                </div>
                </div>
            </section>
        @endif
    @endforeach
    @endif
@endforeach