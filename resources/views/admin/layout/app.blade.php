<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ucfirst(substr(Route::currentRouteName(), 6, -6)) }} - Wisudawan Apps</title>


    @include('admin.layout.app-partials.css')
</head>
<body class="hold-transition skin-black-light layout-boxed sidebar-mini">
<div class="wrapper">
    @include('admin.layout.app-partials.header')
    @include('admin.layout.app-partials.sidebar')
    @include('admin.layout.app-partials.content')
    @include('admin.layout.app-partials.footer')
</div>
    @include('admin.layout.app-partials.js')
</body>
</html>