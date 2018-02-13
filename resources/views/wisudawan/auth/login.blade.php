@extends('wisudawan.layout.app')

@section('content')

<h1 class="title">Login</h1>
<h2 class="subtitle">Login untuk memulai melakukan perubahan data <strong>wisudawan</strong>.
    <br>
    Gunakan <code>NIM</code> dan <code>Password</code> yang telah terdaftar atau <a href="{{route('register')}}">registrasi</a> terlebih dahulu.</h2>
<hr>

<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="columns is-mobile">
        <div class="column is-half is-narrow">
            <p class="bd-notification is-info">
            <div class="field">
                <label class="label">Nim</label>
                <div class="control">
                    <input class="input {{ $errors->has('nim') ? 'is-danger' : '' }}" name="nim" type="text" placeholder="Masukkan nim">
                </div>
                @if ($errors->has('nim'))
                    <p class="help is-danger">{{ $errors->first('nim') }}</p>
                @endif
            </div>
            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input class="input {{ $errors->has('nim') ? 'is-danger' : '' }}" name="password" type="password" placeholder="Masukkan password">
                </div>
                @if ($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">
                        <span class="icon">
                          <i class="fa fa-sign-in"></i>
                        </span>
                        <span>Login</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
