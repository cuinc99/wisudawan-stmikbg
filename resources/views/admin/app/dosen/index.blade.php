@extends('admin.layout.app')

@section('data-active','active')
@section('dosen-active','active')

@section('content')
    <div class="row">
        <div class="col-md-8">
            @include('admin.app.dosen._list')
        </div>
        <div class="col-md-4">
            @include('admin.app.dosen._form')
        </div>
    </div>
@endsection
