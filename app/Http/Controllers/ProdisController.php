<?php

namespace App\Http\Controllers;

use App\Prodi;
use Illuminate\Http\Request;
use Toastr;

class ProdisController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all();
        return view('admin.app.prodi.index',compact('prodis'));
    }

    public function store()
    {
        $this->validate(request(),[
            'alias' => 'required|unique:prodis',
            'nama' => 'required',
            'gelar' => 'required',
            'kampus' => 'required',
            'color' => 'required',
        ]);

        Prodi::create(request(['alias','nama','gelar','kampus','color']));

        Toastr::success('Data prodi berhasil disimpan.', $title = 'Mantap!', $options = []);

        return redirect()->route('admin.prodi.index');
    }

    public function edit($id)
    {
        $prodis = Prodi::all();
        $prodi = Prodi::find($id);

        return view('admin.app.prodi.index',compact('prodis','prodi'));
    }

    public function update(Request $request, $id)
    {
        $prodi = Prodi::find($id);

        $this->validate(request(),[
            'alias' => 'required|unique:prodis,alias,'.$id,
            'nama' => 'required',
            'gelar' => 'required',
            'kampus' => 'required',
            'color' => 'required',
        ]);

        $prodi->alias = $request->alias;
        $prodi->nama = $request->nama;
        $prodi->gelar = $request->gelar;
        $prodi->kampus = $request->kampus;
        $prodi->color = $request->color;
        $prodi->save();

        Toastr::info('Data prodi berhasil diubah.', $title = 'Sip!', $options = []);

        return redirect()->route('admin.prodi.index');
    }

    public function destroy($id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();

        Toastr::warning('Data prodi berhasil dihapus.', $title = 'Upss!', $options = []);

        return redirect()->route('admin.prodi.index');
    }
}
