@extends('wisudawan.layout.app')

@section('content')
    {{--<div class="notification is-primary">--}}
        {{--Info--}}
    {{--</div>--}}
    <h1 class="title">Informasi</h1>
    <h2 class="subtitle">Berikut informasi data anda <strong>{{ Auth::user()->nim }}</strong>.
        <br>
        Pastikan anda melakukan penyimpanan setelah melakukan perubahan data, dengan button <code>Simpan Perubahan</code>
        <hr>

        <div class="columns">
            <div class="column">
                @include('wisudawan.app.image')
            </div>
            <div class="column is-two-thirds">
                @include('wisudawan.app.edit')
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>

@endsection
