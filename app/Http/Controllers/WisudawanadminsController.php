<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Wisudawan;
use App\Prodi;
use File;
use Response;
use Toastr;
use Image;
use Excel;
use Zipper;

class WisudawanadminsController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all();
        return view('admin.app.wisudawan.index', compact('prodis') );
    }

    public function detail($id)
    {
        $wisudawan = Wisudawan::find($id);
        return view('admin.app.wisudawan.show', compact('wisudawan'));
    }

    public function terbaik($id)
    {
        $wisudawan = Wisudawan::find($id);
        if ($wisudawan->terbaik == false){
            $wisudawan->terbaik = true;
        }elseif($wisudawan->terbaik == true){
            $wisudawan->terbaik = false;
        }
        $wisudawan->save();

        return redirect()->route('admin.wisudawan.index');
    }

    public function berprestasi($id)
    {
        $wisudawan = Wisudawan::find($id);
        if ($wisudawan->berprestasi == false){
            $wisudawan->berprestasi = true;
        }elseif($wisudawan->berprestasi == true){
            $wisudawan->berprestasi = false;
        }
        $wisudawan->save();

        return redirect()->route('admin.wisudawan.index');
    }

    public function destroy($id)
    {
        $wisudawan = Wisudawan::find($id);
        File::delete('photo/'.$wisudawan->photo);
        $wisudawan->delete();

        Toastr::warning('Data wisudawan berhasil dihapus.', $title = 'Upss!', $options = []);

        return redirect()->route('admin.wisudawan.index');
    }

    public function slide()
    {
        $wisudawans = Wisudawan::all();
        $prodis = Prodi::all();
        $settings = Setting::all();
        return view('admin.app.wisudawan.ppt', compact('wisudawans','prodis','settings'));
    }

    public function exportExcel()
    {
        Excel::create(date('d-m-Y').'_data-wisudawan', function($excel) {
            $excel->sheet('Wisudawan', function($sheet) {
                $wisudawans = Wisudawan::all();
                $sheet->loadView('admin.app.wisudawan.report')->with('wisudawans',$wisudawans);
            });
        })->download('xlsx');
    }

    public function removeAll()
    {
        $wisudawans = Wisudawan::all();
        foreach ($wisudawans as $wisudawan){
            File::delete('photo/'.$wisudawan->photo);
        }

        Wisudawan::truncate();
        return redirect()->route('admin.wisudawan.index');
    }

    public function downloadPhoto()
    {
        $zip_name =date('d-m-Y').'_photo-wisudawan.zip';
        $photo = glob('photo/*');
        Zipper::make($zip_name)->add($photo)->close();

        $filepath = public_path($zip_name);
        return Response::download($filepath)->deleteFileAfterSend(true);
    }
}
