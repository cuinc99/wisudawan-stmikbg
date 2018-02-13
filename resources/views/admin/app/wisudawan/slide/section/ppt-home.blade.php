<section class="bg-gradient-r aligncenter" style="background: #134E5E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #71B280, #134E5E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #71B280, #134E5E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
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
        <h2 class="text-landing text-shadow"><strong>{{ $setting->home_judul }}</strong></h2>
        <h5 class="text-subtitle"><strong>{!! $setting->home_deskripsi !!}</strong></h5>
        <hr>
        <span>{{ $setting->home_tanggal }}</span>
        <hr>
    </div>
</section>

<section class="bg-blue aligncenter">
    <video class="background-video dark" autoplay muted loop>
        <source src="{{ asset('/slide/background/video_stmik.mp4') }}" type="video/mp4">
    </video>
    <div class="wrap">
        <h2 class="text-landing text-shadow"><strong>{{ $setting->intro_judul }}</strong></h2>
        <p class="text-intro"><code>{!! $setting->intro_deskripsi  !!}</code></p>
    </div>
    </div>
</section>