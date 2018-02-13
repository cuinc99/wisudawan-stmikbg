@extends('admin.layout.app')

@section('setting-active','active')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.app.setting._form')
        </div>
    </div>
@endsection
