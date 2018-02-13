@if(Route::currentRouteName() == 'admin.prodi.index')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Program Studi</h3>
        </div>
        <form role="form" method="post" action="{{ route('admin.prodi.store') }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
                    <label for="alias">Alias</label>
                    <input type="text" class="form-control" name="alias" id="alias" placeholder="Singkatan Nama Program Studi">
                    @if ($errors->has('alias'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('alias') }}</p>
                                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                    <label for="nama">Nama Program Studi</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Program Studi">
                    @if ($errors->has('nama'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('nama') }}</p>
                                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('gelar') ? ' has-error' : '' }}">
                    <label for="gelar">Gelar Program Studi</label>
                    <input type="text" class="form-control" name="gelar" id="gelar" placeholder="ex. S.Kom, A.Md">
                    @if ($errors->has('gelar'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('gelar') }}</p>
                                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('kampus') ? ' has-error' : '' }}">
                    <label for="kampus">Kampus</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="kampus" id="kampus" value="stmikbg">
                            STMIK Bumigora Mataram
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="kampus" id="kampus" value="stibabg">
                            STIBA Bumigora Mataram
                        </label>
                    </div>
                    @if ($errors->has('kampus'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('kampus') }}</p>
                                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                    <label for="color">Warna</label>
                    <textarea class="form-control {{ $errors->has('color') ? 'is-danger' : '' }}" rows="3" name="color" placeholder="Kunjungin www.uigradients.com untuk mengambil warna.">{{ old('judul') }}</textarea>
                    Lihat warna <a href="https://uigradients.com" target="_blank">uigradients.com</a>
                    @if ($errors->has('color'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('color') }}</p>
                                </span>
                    @endif
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-default btn-flat pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
            </div>
        </form>
    </div>
@elseif(Route::currentRouteName() == 'admin.prodi.edit')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Program Studi</h3>
        </div>
        <form role="form" method="post" action="{{ route('admin.prodi.update', $prodi->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="box-body">
                <div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
                    <label for="alias">Alias</label>
                    <input type="text" value="{{ $prodi->alias }}" class="form-control" name="alias" id="alias" placeholder="Singkatan Nama Program Studi">
                    @if ($errors->has('alias'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('alias') }}</p>
                                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                    <label for="nama">Nama Program Studi</label>
                    <input type="text" value="{{ $prodi->nama }}" class="form-control" name="nama" id="nama" placeholder="Nama Program Studi">
                    @if ($errors->has('nama'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('nama') }}</p>
                                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('gelar') ? ' has-error' : '' }}">
                    <label for="gelar">Gelar Program Studi</label>
                    <input type="text" value="{{ $prodi->gelar }}" class="form-control" name="gelar" id="gelar" placeholder="ex. S.Kom, A.Md">
                    @if ($errors->has('gelar'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('gelar') }}</p>
                                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('kampus') ? ' has-error' : '' }}">
                    <label for="kampus">Kampus</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="kampus" id="kampus" value="stmikbg" {{ $prodi->kampus == 'stmikbg' ? 'checked' : '' }}>
                            STMIK Bumigora Mataram
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="kampus" id="kampus" value="stibabg" {{ $prodi->kampus == 'stibabg' ? 'checked' : '' }}>
                            STIBA Bumigora Mataram
                        </label>
                    </div>
                    @if ($errors->has('kampus'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('kampus') }}</p>
                                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                    <label for="color">Warna</label>
                    <textarea class="form-control {{ $errors->has('color') ? 'is-danger' : '' }}" rows="3" name="color" placeholder="Kunjungin www.uigradients.com untuk mengambil warna.">
                        {{ $prodi->color }}
                    </textarea>
                    Lihat warna <a href="https://uigradients.com" target="_blank">uigradients.com</a>
                    @if ($errors->has('color'))
                        <span class="help-block">
                                        <p class="text-red">{{ $errors->first('color') }}</p>
                                </span>
                    @endif
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-default btn-flat pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan</button>
                <a href="{{ route('admin.prodi.index') }}" class="btn btn-default btn-flat pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Batal</a>
            </div>
        </form>
    </div>
@endif