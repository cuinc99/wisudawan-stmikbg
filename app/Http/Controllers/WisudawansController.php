<?php

namespace App\Http\Controllers;

use App\Wisudawan;
use Illuminate\Http\Request;
use Toastr;
use Image;
use Storage;
use File;

class WisudawansController extends Controller
{

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $wisudawan = Wisudawan::find($id);

        $this->validate(request(),[
            'nim' => 'required|max:10|unique:wisudawans,nim,'.$id,
            'nama' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'hp' => 'required|max:255',
            'ipk' => 'required|max:4',
            'email' => 'required|email|max:255|unique:wisudawans,email,'.$id,
            'judul' => 'required|max:255',
            'prodi_id' => 'required|numeric',
            'angkatan_id' => 'required|numeric',
            'dosen_id' => 'required|numeric',
            'photo' => 'sometimes|image|max:1000',
        ]);

        $wisudawan->nim = $request->nim;
        $wisudawan->nama = $request->nama;
        $wisudawan->tempat_lahir = $request->tempat_lahir;
        $wisudawan->tanggal_lahir = $request->tanggal_lahir;
        $wisudawan->alamat = $request->alamat;
        $wisudawan->hp = $request->hp;
        $wisudawan->ipk = $request->ipk;
        $wisudawan->email = $request->email;
        $wisudawan->judul = $request->judul;
        $wisudawan->prodi_id = $request->prodi_id;
        $wisudawan->angkatan_id = $request->angkatan_id;
        $wisudawan->dosen_id = $request->dosen_id;

        if ($request->hasFile('photo')){
            File::delete('photo/'.$wisudawan->photo);
            $photo = $request->file('photo');
            $filename = $wisudawan->nim . '.' . $photo->getClientOriginalExtension();
            $location = public_path('photo/' . $filename);

            Image::make($photo)->save($location);//resize(400, 400)->

            $wisudawan->photo = $filename;
        }

        $wisudawan->save();

        Toastr::info('Data anda berhasil diubah.', $title = 'Sip!', $options = []);

        return redirect()->route('wisudawan.home');
    }

    public function preview()
    {
        return view('wisudawan.app.preview');
    }
}
