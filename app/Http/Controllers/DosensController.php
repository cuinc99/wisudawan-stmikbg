<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;
use Toastr;

class DosensController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('admin.app.dosen.index', compact('dosens'));
    }

    public function store()
    {
        $this->validate(request(),[
            'nik' => 'required|unique:dosens',
            'nama' => 'required',
        ]);

        Dosen::create(request(['nik','nama']));

        Toastr::success('Data dosen berhasil ditambahkan.', $title = 'Mantap!', $options = []);

        return redirect()->route('admin.dosen.index');
    }

    public function edit($id)
    {
        $dosens = Dosen::all();
        $dosen = Dosen::find($id);

        return view('admin.app.dosen.index', compact('dosens','dosen'));
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);

        $this->validate(request(),[
            'nik' => 'required|unique:dosens,nik,'.$id,
            'nama' => 'required'
        ]);

        $dosen->nik = $request->nik;
        $dosen->nama = $request->nama;
        $dosen->save();

        Toastr::info('Data dosen berhasil diubah.', $title = 'Sip!', $options = []);

        return redirect()->route('admin.dosen.index');
    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id);

        $dosen->delete();

        Toastr::warning('Data dosen berhasil dihapus.', $title = 'Upss!', $options = []);

        return redirect()->route('admin.dosen.index');
    }
}
