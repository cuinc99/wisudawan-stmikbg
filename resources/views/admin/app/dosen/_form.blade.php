@if(Route::currentRouteName() == 'admin.dosen.index')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Dosen Pembimbing</h3>
        </div>
        <form role="form" method="post" action="{{ route('admin.dosen.store') }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
                    <label for="nik">Nik</label>
                    <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik Dosen">
                    @if ($errors->has('nik'))
                        <span class="help-block">
                            <p class="text-red">{{ $errors->first('nik') }}</p>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                    <label for="nama">Nama Dosen</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap Dosen">
                    @if ($errors->has('nama'))
                        <span class="help-block">
                            <p class="text-red">{{ $errors->first('nama') }}</p>
                        </span>
                    @endif
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-default btn-flat pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
            </div>
        </form>
    </div>
@elseif(Route::currentRouteName() == 'admin.dosen.edit')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Dosen</h3>
        </div>
        <form role="form" method="post" action="{{ route('admin.dosen.update', $dosen->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="box-body">
                <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
                    <label for="nik">Nik</label>
                    <input type="text" value="{{ $dosen->nik }}" class="form-control" name="nik" id="nik" placeholder="Nik Dosen">
                    @if ($errors->has('nik'))
                        <span class="help-block">
                            <p class="text-red">{{ $errors->first('nik') }}</p>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                    <label for="nama">Nama Dosen</label>
                    <input type="text" value="{{ $dosen->nama }}" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap Dosen">
                    @if ($errors->has('nama'))
                        <span class="help-block">
                            <p class="text-red">{{ $errors->first('nama') }}</p>
                        </span>
                    @endif
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-default btn-flat pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan</button>
                <a href="{{ route('admin.dosen.index') }}" class="btn btn-default btn-flat pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Batal</a>
            </div>
        </form>
    </div>
@endif