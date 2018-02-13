@if(Route::currentRouteName() == 'admin.angkatan.index')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Tahun Angkatan</h3>
        </div>
        <form role="form" method="post" action="{{ route('admin.angkatan.store') }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group{{ $errors->has('tahun') ? ' has-error' : '' }}">
                    <label for="tahun">Tahun Angkatan</label>
                    <input type="text" maxlength="4" class="form-control" name="tahun" id="tahun" placeholder="Tahun Angkatan">
                    @if ($errors->has('tahun'))
                        <span class="help-block">
                            <p class="text-red">{{ $errors->first('tahun') }}</p>
                        </span>
                    @endif
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-default btn-flat pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
            </div>
        </form>
    </div>
@elseif(Route::currentRouteName() == 'admin.angkatan.edit')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Tahun Angkatan</h3>
        </div>
        <form role="form" method="post" action="{{ route('admin.angkatan.update', $angkatan->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="box-body">
                <div class="form-group{{ $errors->has('tahun') ? ' has-error' : '' }}">
                    <label for="tahun">Tahun</label>
                    <input type="text" maxlength="4" value="{{ $angkatan->tahun }}" class="form-control" name="tahun" id="tahun" placeholder="Tahun Angkatan">
                    @if ($errors->has('tahun'))
                        <span class="help-block">
                            <p class="text-red">{{ $errors->first('tahun') }}</p>
                        </span>
                    @endif
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-default btn-flat pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan</button>
                <a href="{{ route('admin.angkatan.index') }}" class="btn btn-default btn-flat pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Batal</a>
            </div>
        </form>
    </div>
@endif