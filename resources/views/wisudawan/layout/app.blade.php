<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wisudawan Apps | Data, Photo dan Slide Wisudawan</title>

    @include('wisudawan.layout.app-partials.css')

</head>
<body>

@include('wisudawan.layout.app-partials.header')

@include('wisudawan.layout.app-partials.content')

@include('wisudawan.layout.app-partials.footer')

@include('wisudawan.layout.app-partials.js')
</body>

</html>
