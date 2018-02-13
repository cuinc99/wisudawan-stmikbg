<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-cog" aria-hidden="true"></i> Setting Slide</h3>
    </div>
    <form role="form" method="post" action="{{ route('admin.setting.update', $setting->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="box-body">
            <div class="form-group{{ $errors->has('template_for') ? ' has-error' : '' }}">
                <label for="template_for">Slide for</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="template_for" id="template_for" value="stmikstiba" {{ $setting->template_for == 'stmikstiba' ? 'checked' : '' }}>
                        Wisuda STMIK dan STIBA
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="template_for" id="template_for" value="stmik" {{ $setting->template_for == 'stmik' ? 'checked' : '' }}>
                        Wisuda STMIK
                    </label>
                </div>
                <hr>
                @if ($errors->has('kampus'))
                    <span class="help-block">
                                        <p class="text-red">{{ $errors->first('kampus') }}</p>
                                </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('home_judul') ? ' has-error' : '' }}">
                <label for="home_judul">Nama Agenda</label>
                <input type="text" class="form-control" name="home_judul" id="home_judul" value="{{ $setting->home_judul }}">
                @if ($errors->has('home_judul'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('home_judul') }}</p>
                            </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('home_deskripsi') ? ' has-error' : '' }}">
                <label for="home_deskripsi">Deskripsi Agenda</label>
                <textarea class="form-control" rows="3" name="home_deskripsi">{{ $setting->home_deskripsi }}</textarea>
                @if ($errors->has('home_deskripsi'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('home_deskripsi') }}</p>
                            </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('home_tanggal') ? ' has-error' : '' }}">
                <label for="home_tanggal">Tanggal Agenda</label>
                <input type="text" class="form-control" value="{{ $setting->home_tanggal }}" name="home_tanggal" id="home_tanggal">
                @if ($errors->has('home_tanggal'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('home_tanggal') }}</p>
                            </span>
                @endif
            </div>
            <hr>
            {{--INTRO--}}
            <div class="form-group{{ $errors->has('intro_judul') ? ' has-error' : '' }}">
                <label for="intro_judul">Judul Intro</label>
                <input type="text" class="form-control" value="{{ $setting->intro_judul }}" name="intro_judul" id="intro_judul">
                @if ($errors->has('intro_judul'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('intro_judul') }}</p>
                            </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('intro_deskripsi') ? ' has-error' : '' }}">
                <label for="intro_deskripsi">Deskripsi Intro</label>
                <textarea class="form-control" rows="3" name="intro_deskripsi">{{ $setting->intro_deskripsi }}</textarea>
                @if ($errors->has('intro_deskripsi'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('intro_deskripsi') }}</p>
                            </span>
                @endif
            </div>
            <hr>
            {{--TERBAIK DAN BERPRESTASI--}}
            <div class="form-group{{ $errors->has('terbaik_judul') ? ' has-error' : '' }}">
                <label for="terbaik_judul">Judul Wisudawan Terbaik</label>
                <input type="text" class="form-control" value="{{ $setting->terbaik_judul }}" name="terbaik_judul" id="terbaik_judul">
                @if ($errors->has('terbaik_judul'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('terbaik_judul') }}</p>
                            </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('berprestasi_judul') ? ' has-error' : '' }}">
                <label for="berprestasi_judul">Judul Wisudawan Berprestasi</label>
                <input type="text" class="form-control" value="{{ $setting->berprestasi_judul }}" name="berprestasi_judul" id="berprestasi_judul">
                @if ($errors->has('berprestasi_judul'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('berprestasi_judul') }}</p>
                            </span>
                @endif
            </div>
            <hr>
            {{--STMIK--}}
            <div class="form-group{{ $errors->has('stmik_judul') ? ' has-error' : '' }}">
                <label for="stmik_judul">Judul STMIK Bumigora Mataram</label>
                <input type="text" class="form-control" value="{{ $setting->stmik_judul }}" name="stmik_judul" id="stmik_judul">
                @if ($errors->has('stmik_judul'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('stmik_judul') }}</p>
                            </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('stmik_deskripsi') ? ' has-error' : '' }}">
                <label for="stmik_deskripsi">Deskripsi STMIK Bumigora Mataram</label>
                <textarea class="form-control" rows="3" name="stmik_deskripsi">{{ $setting->stmik_deskripsi }}</textarea>
                @if ($errors->has('stmik_deskripsi'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('stmik_deskripsi') }}</p>
                            </span>
                @endif
            </div>
            <hr>
            {{--STIBA--}}
            <div class="form-group{{ $errors->has('stiba_judul') ? ' has-error' : '' }}">
                <label for="stiba_judul">Judul STIBA Bumigora Mataram</label>
                <input type="text" class="form-control" value="{{ $setting->stiba_judul }}" name="stiba_judul" id="stiba_judul">
                @if ($errors->has('stiba_judul'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('stiba_judul') }}</p>
                            </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('stiba_deskripsi') ? ' has-error' : '' }}">
                <label for="stiba_deskripsi">Deskripsi STIBA Bumigora Mataram</label>
                <textarea class="form-control" rows="3" name="stiba_deskripsi">{{ $setting->stiba_deskripsi }}</textarea>
                @if ($errors->has('stiba_deskripsi'))
                    <span class="help-block">
                                    <p class="text-red">{{ $errors->first('stiba_deskripsi') }}</p>
                            </span>
                @endif
            </div>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-default btn-flat pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
        </div>
    </form>
</div>