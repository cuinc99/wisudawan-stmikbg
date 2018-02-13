@extends('admin.layout.app')

@section('data-active','active')
@section('prodi-active','active')

@section('content')
    <div class="row">
        <div class="col-md-6">
            @include('admin.app.prodi._list')
        </div>
        <div class="col-md-6">
            @include('admin.app.prodi._form')
        </div>
    </div>
@endsection
