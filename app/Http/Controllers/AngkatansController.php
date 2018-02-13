<?php

namespace App\Http\Controllers;

use App\Angkatan;
use Illuminate\Http\Request;
use Toastr;

class AngkatansController extends Controller
{
    public function index()
    {
        $angkatans = Angkatan::orderBy('tahun')->get();
        return view('admin.app.angkatan.index', compact('angkatans'));
    }

    public function store()
    {
        $this->validate(request(),[
            'tahun' => 'required|unique:angkatans|numeric'
        ]);

        Angkatan::create(request(['tahun']));

        Toastr::success('Data angkatan berhasil disimpan.', $title = 'Mantap!', $options = []);

        return redirect()->route('admin.angkatan.index');
    }

    public function edit($id)
    {
        $angkatans = Angkatan::orderBy('tahun')->get();
        $angkatan = Angkatan::find($id);

        return view('admin.app.angkatan.index', compact('angkatans','angkatan'));
    }

    public function update(Request $request, $id)
    {
        $angakatan = Angkatan::find($id);

        $this->validate(request(),[
            'tahun' => 'required|numeric|unique:angkatans,tahun,'.$id
        ]);

        $angakatan->tahun = $request->tahun;
        $angakatan->save();

        Toastr::info('Data angkatan berhasil diubah.', $title = 'Sip!', $options = []);

        return redirect()->route('admin.angkatan.index');
    }

    public function destroy($id)
    {
        $angkatan = Angkatan::find($id);
        $angkatan->delete();

        Toastr::warning('Data angkatan berhasil dihapus.', $title = 'Upss!', $options = []);

        return redirect()->route('admin.angkatan.index');
    }
}
