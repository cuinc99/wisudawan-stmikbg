<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    @include('admin.app.wisudawan.slide.css-slide')
</head>
<body>
<main role="main">
    <article id="webslides">
        <section class="fullscreen bg-gradient-h" style="{{ Auth::user()->prodi->color }}">
            <div class="card-30">
                <figure>
                    @if(is_null(Auth::user()->photo))
                        <img src="{{ asset('/photo-not-available.jpg') }}" alt="photo-not-available">
                    @else
                        @if(file_exists( public_path().'/photo/'.Auth::user()->photo ))
                            <img src="{{ asset('/photo/'.Auth::user()->photo) }}" alt="Photo">
                        @else
                            <img src="{{ asset('/photo-not-available.jpg') }}" alt="photo-not-available">
                        @endif
                    @endif
                </figure>
                <div class="flex-content">
                    <h2 class="aligncenter">{{ Auth::user()->nama }}, {{ Auth::user()->prodi->gelar }}</h2>
                    <p class="aligncenter">{{ Auth::user()->nim }}</p>
                    <table>
                        <tbody>
                        <tr>
                            <td>TTL</td>
                            <td>➭</td>
                            <td>{{ Auth::user()->tempat_lahir }}, {{ Auth::user()->tanggal_lahir->format('d F Y') }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>➭</td>
                            <td>{{ Auth::user()->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No. Hp</td>
                            <td>➭</td>
                            <td>{{ Auth::user()->hp }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>➭</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>IPK</td>
                            <td>➭</td>
                            <td>{{ Auth::user()->ipk }}</td>
                        </tr>
                        <tr>
                            <td>Dosen Pembimbing</td>
                            <td>➭</td>
                            <td>{{ Auth::user()->dosen->nama }}</td>
                        </tr>
                        <tr>
                            <td>Judul Skripsi/TA</td>
                            <td>➭</td>
                            <td>{{ Auth::user()->judul }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="text-symbols">* * *</p>
                </div>
            </div>
            </div>
        </section>
    </article>
</main>
@include('admin.app.wisudawan.slide.js-slide')
</body>
</html>