<div class="card">
    <div class="card-image">
        <figure class="image is-4by3">
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
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-content">
                <p class="title is-5">{{ Auth::user()->nama }}</p>
                <p class="subtitle is-6">{{ Auth::user()->nim }}</p>
            </div>
        </div>

        <div class="content">
            <i>"{{ Auth::user()->judul }}"</i>
        </div>
        <a href="{{ route('wisudawan.preview', Auth::user()->id) }}" target="_blank" class="button is-primary">Preview slide anda</a>
    </div>
</div>