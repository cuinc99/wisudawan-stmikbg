<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    @include('admin.app.wisudawan.slide.css-slide')
</head>
<body>

<main role="main">
    <article id="webslides">
        @foreach($settings as $setting)
            @include('admin.app.wisudawan.slide.section.ppt-home')

            @include('admin.app.wisudawan.slide.section.ppt-terbaik')

            @include('admin.app.wisudawan.slide.section.ppt-berprestasi')

            @if($setting->template_for == 'stmikstiba')
                @include('admin.app.wisudawan.slide.section.ppt-stmik')
                @include('admin.app.wisudawan.slide.section.ppt-stiba')
            @else
                @include('admin.app.wisudawan.slide.section.ppt-stmik')
            @endif
        @endforeach

    </article>
</main>
@include('admin.app.wisudawan.slide.js-slide')
</body>
</html>