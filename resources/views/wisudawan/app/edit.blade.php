<form class="form-horizontal" role="form" method="POST" action="{{ route('wisudawan.update', Auth::user()->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Photo</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="file">
                    <label class="file-label">
                        <input class="file-input" type="file" name="photo">
                        <span class="file-cta">
                          <span class="file-icon">
                            <i class="fa fa-upload"></i>
                          </span>
                          <span class="file-label">
                            Pilih photo...
                          </span>
                        </span>
                    </label>
                </div>
                @if ($errors->has('photo'))
                    <p class="help is-danger">{{ $errors->first('photo') }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Data Diri</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input {{ $errors->has('nama') ? 'is-danger' : '' }}" name="nama" type="text" value="{{ Auth::user()->nama }}">
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
                    <input class="input {{ $errors->has('nim') ? 'is-danger' : '' }}" maxlength="10" name="nim" type="text" value="{{ Auth::user()->nim }}" >
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
                    <input class="input {{ $errors->has('hp') ? 'is-danger' : '' }}" name="hp" type="text" value="{{ Auth::user()->hp }}" >
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
                    <input class="input {{ $errors->has('tempat_lahir') ? 'is-danger' : '' }}" name="tempat_lahir" type="text" value="{{ Auth::user()->tempat_lahir }}" >
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
                    <input class="input tanggal_lahir_edit" name="tanggal_lahir" type="date" value="{{ Auth::user()->tanggal_lahir }}" >
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
                    <textarea class="textarea {{ $errors->has('alamat') ? 'is-danger' : '' }}" rows="2" name="alamat" placeholder="Alamat tempat tinggal anda sekarang" >{{ Auth::user()->alamat }}</textarea>
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
                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" type="email" value="{{ Auth::user()->email }}"  placeholder="e.g. user@example.com">
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
                    <input class="input" maxlength="4" type="number" name="ipk" min="0" max="10" step=".01" value="{{ Auth::user()->ipk }}" >
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
                                <option value="{{ $prodi->id }}" {{ ( Auth::user()->prodi->id == $prodi->id  ) ? 'selected' : '' }}>{{ $prodi->nama }}</option>
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
                                <option value="{{ $angkatan->id }}" {{ ( Auth::user()->angkatan->id == $angkatan->id  ) ? 'selected' : '' }}>{{ $angkatan->tahun }}</option>
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
                                <option value="{{ $dosen->id }}" {{ ( Auth::user()->dosen->id == $dosen->id  ) ? 'selected' : '' }}>{{ $dosen->nama }}</option>
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
                    <textarea class="textarea {{ $errors->has('judul') ? 'is-danger' : '' }}" name="judul" rows="2" >{{ Auth::user()->judul }}</textarea>
                </div>
                @if ($errors->has('judul'))
                    <p class="help is-danger">{{ $errors->first('judul') }}</p>
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
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>