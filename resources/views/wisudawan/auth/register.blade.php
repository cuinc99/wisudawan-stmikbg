@extends('wisudawan.layout.app')

@section('content')

<h1 class="title">Registrasi</h1>
<h2 class="subtitle">Form untuk merekap data <strong>wisudawan</strong> yang akan diwisuda.
    <br>
    Silahkan mengisi data anda dengan <code>Teliti</code> dan <code>Benar</code> pada form yang telah disediakan.
<hr>

<form class="form-horizontal" role="form" method="POST" action="{{ url('/wisudawan/register') }}">
    {{ csrf_field() }}
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Data Diri</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input {{ $errors->has('nama') ? 'is-danger' : '' }}" name="nama" type="text" placeholder="Nama" value="{{ old('nama') }}" autofocus>
                    <span class="icon is-small is-left">
                      <i class="fa fa-user"></i>
                    </span>
                </p>
                @if ($errors->has('nama'))
                    <p class="help is-danger">{{ $errors->first('nama') }}</p>
                @endif
            </div>
            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input {{ $errors->has('nim') ? 'is-danger' : '' }}" name="nim" type="text" value="{{ old('nim') }}" placeholder="Nomor induk mahasiswa">
                    <span class="icon is-small is-left">
                      <i class="fa fa-sort-numeric-asc"></i>
                    </span>

                </p>
                @if ($errors->has('nim'))
                    <p class="help is-danger">{{ $errors->first('nim') }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label"></div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input {{ $errors->has('hp') ? 'is-danger' : '' }}" name="hp" type="text" value="{{ old('hp') }}" placeholder="Nomor handphone">
                    <span class="icon is-small is-left">
                      <i class="fa fa-phone"></i>
                    </span>

                </p>
                @if ($errors->has('hp'))
                    <p class="help is-danger">{{ $errors->first('hp') }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Tempat Lahir</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input {{ $errors->has('tempat_lahir') ? 'is-danger' : '' }}" name="tempat_lahir" type="text" value="{{ old('tempat_lahir') }}" placeholder="Tempat lahir">
                    <span class="icon is-small is-left">
                      <i class="fa fa-location-arrow"></i>
                    </span>
                </p>
                @if ($errors->has('tempat_lahir'))
                    <p class="help is-danger">{{ $errors->first('tempat_lahir') }}</p>
                @endif
            </div>
            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input tanggal_lahir" name="tanggal_lahir" type="date" value="{{ old('tanggal_lahir') }}" placeholder="Tanggal Lahir">
                    <span class="icon is-small is-left">
                      <i class="fa fa-calendar"></i>
                    </span>

                </p>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Alamat</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <textarea class="textarea {{ $errors->has('alamat') ? 'is-danger' : '' }}" rows="2" name="alamat" placeholder="Alamat tempat tinggal anda sekarang">{{ old('alamat') }}</textarea>
                </div>
                @if ($errors->has('alamat'))
                    <p class="help is-danger">{{ $errors->first('alamat') }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Email</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control is-expanded has-icons-left">
                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" type="email" value="{{ old('email') }}" placeholder="e.g. user@example.com">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                </div>
                @if ($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input {{ $errors->has('ipk') ? 'is-danger' : '' }}" type="number" name="ipk" min="0" max="10" step=".01" value="{{ old('ipk') }}" placeholder="Indeks Prestasi Komulatif">
                    <span class="icon is-small is-left">
                      <i class="fa fa-sun-o"></i>
                    </span>

                </p>
                @if ($errors->has('ipk'))
                    <p class="help is-danger">{{ $errors->first('ipk') }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Program Studi</label>
        </div>
        <div class="field-body">
            <div class="field is-narrow">
                <div class="control">
                    <div class="select is-fullwidth {{ $errors->has('prodi_id') ? 'is-danger' : '' }}">
                        <select name="prodi_id">
                            <option>Pilih Program Studi</option>
                            @foreach($prodis as $prodi)
                                <option value="{{ $prodi->id }}" {{ (collect(old('prodi_id'))->contains($prodi->id)) ? 'selected':'' }}>{{ $prodi->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('prodi_id'))
                        <p class="help is-danger">{{ $errors->first('prodi_id') }}</p>
                    @endif
                </div>
            </div>
            <div class="field is-narrow">
                <div class="control">
                    <div class="select is-fullwidth {{ $errors->has('angkatan_id') ? 'is-danger' : '' }}">
                        <select name="angkatan_id">
                            <option>Pilih Tahun Angkatan</option>
                            @foreach($angkatans as $angkatan)
                                <option value="{{ $angkatan->id }}" {{ (collect(old('angkatan_id'))->contains($angkatan->id)) ? 'selected':'' }}>{{ $angkatan->tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('angkatan_id'))
                        <p class="help is-danger">{{ $errors->first('angkatan_id') }}</p>
                    @endif
                </div>
            </div>
            <div class="field is-narrow">
                <div class="control">
                    <div class="select is-fullwidth {{ $errors->has('dosen_id') ? 'is-danger' : '' }}">
                        <select name="dosen_id">
                            <option>Pilih Dosen Pembimbing</option>
                            @foreach($dosens as $dosen)
                                <option value="{{ $dosen->id }}" {{ (collect(old('dosen_id'))->contains($dosen->id)) ? 'selected':'' }}>{{ $dosen->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('dosen_id'))
                        <p class="help is-danger">{{ $errors->first('dosen_id') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">TA/Skripsi</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <textarea class="textarea {{ $errors->has('judul') ? 'is-danger' : '' }}" rows="2" name="judul" placeholder="Judul Tugas Akhir/Skripsi">{{ old('judul') }}</textarea>
                </div>
                @if ($errors->has('judul'))
                    <p class="help is-danger">{{ $errors->first('judul') }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Password</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="password" type="password" placeholder="Password">
                    <span class="icon is-small is-left">
                  <i class="fa fa-key"></i>
                </span>
                </p>
                @if ($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" name="password_confirmation" type="password" placeholder="Konfirmasi Password">
                    <span class="icon is-small is-left">
                      <i class="fa fa-check-circle-o"></i>
                    </span>
                </p>
                @if ($errors->has('password_confirmation'))
                    <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
    <br>
    <br>
    <br>
    <br>

@endsection
