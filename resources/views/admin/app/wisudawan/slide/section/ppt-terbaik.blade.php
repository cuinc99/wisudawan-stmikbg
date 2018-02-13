<section class="bg-gradient-r aligncenter">
    <div class="wrap">
        <ul class="flexblock">
            @if($setting->template_for == 'stmikstiba')
                <li>
                    <img class="img aligncenter size-30" src="{{ asset('/slide/logo_stmik.png') }}" alt="STMIKBG">
                </li>
                <li>
                    <img class="img aligncenter size-30" src="{{ asset('/slide/logo_stiba.png') }}" alt="STIBABG">
                </li>
            @else
                <li>
                    <img class="img aligncenter" width="200px" src="{{ asset('/slide/logo_stmik.png') }}" alt="STMIKBG">
                </li>
            @endif
        </ul>
        <h2 class="text-landing text-shadow"><strong>{{ $setting->terbaik_judul }}</strong></h2>
    </div>
</section>

@foreach($prodis as $prodi)
    @foreach($prodi->wisudawan as $wisudawan)
        @if($wisudawan->terbaik == true && $wisudawan->berprestasi == false)
            <section class="fullscreen bg-gradient-h">
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
@endforeach