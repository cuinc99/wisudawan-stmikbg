<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Toastr;

class SettingController extends Controller
{
    public function index()
    {
        $id = 1;
        $setting = Setting::find($id);
        return view('admin.app.setting.index', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);

        $this->validate(request(),[
            'template_for' => 'required',
            'home_judul' => 'required',
            'home_deskripsi' => 'required',
            'home_tanggal' => 'required',
            'intro_judul' => 'required',
            'intro_deskripsi' => 'required',
            'terbaik_judul' => 'required',
            'berprestasi_judul' => 'required',
            'stmik_judul' => 'required',
            'stmik_deskripsi' => 'required',
            'stiba_judul' => 'required',
            'stiba_deskripsi' => 'required',
        ]);

        $setting->template_for = $request->template_for;
        $setting->home_judul = $request->home_judul;
        $setting->home_deskripsi = $request->home_deskripsi;
        $setting->home_tanggal = $request->home_tanggal;
        $setting->intro_judul = $request->intro_judul;
        $setting->intro_deskripsi = $request->intro_deskripsi;
        $setting->terbaik_judul = $request->terbaik_judul;
        $setting->berprestasi_judul = $request->berprestasi_judul;
        $setting->stmik_judul = $request->stmik_judul;
        $setting->stmik_deskripsi = $request->stmik_deskripsi;
        $setting->stiba_judul = $request->stiba_judul;
        $setting->stiba_deskripsi = $request->stiba_deskripsi;
        $setting->save();

        Toastr::success('Data setting berhasil disimpan.', $title = 'Mantap!', $options = []);

        return redirect()->route('admin.setting.index');
    }
}
