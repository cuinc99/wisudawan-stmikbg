@extends('admin.layout.app')

@section('data-active','active')
@section('angkatan-active','active')

@section('content')
    <div class="row">
        <div class="col-md-6">
            @include('admin.app.angkatan._list')
        </div>
        <div class="col-md-6">
            @include('admin.app.angkatan._form')
        </div>
    </div>
@endsection
