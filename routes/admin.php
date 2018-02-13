<?php

use App\Prodi;
use App\Angkatan;
use App\Dosen;
use App\Wisudawan;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    $prodis = Prodi::all();
    $angkatans = Angkatan::all();
    $dosens = Dosen::all();
    $wisudawans = Wisudawan::all();

    return view('admin.home',compact('prodis','angkatans','dosens','wisudawans'));
})->name('home');

Route::resource('/prodi','ProdisController', ['except' => ['create','show','destroy']]);
Route::get('/prodi/{prodi}/delete','ProdisController@destroy')->name('prodi.destroy');

Route::resource('/angkatan','AngkatansController', ['except' => ['create','show','destroy']]);
Route::get('/angkatan/{angkatan}/delete','AngkatansController@destroy')->name('angkatan.destroy');

Route::resource('/dosen','DosensController', ['except' => ['create','show','destroy']]);
Route::get('/dosen/{dosen}/delete','DosensController@destroy')->name('dosen.destroy');

Route::get('/wisudawan','WisudawanadminsController@index')->name('wisudawan.index');
Route::get('/wisudawan/detail/{wisudawan}','WisudawanadminsController@detail')->name('wisudawan.detail');
Route::get('/wisudawan/{wisudawan}/delete','WisudawanadminsController@destroy')->name('wisudawan.delete');
Route::get('/wisudawan/{wisudawan}/terbaik','WisudawanadminsController@terbaik')->name('wisudawan.terbaik');
Route::get('/wisudawan/{wisudawan}/berprestasi','WisudawanadminsController@berprestasi')->name('wisudawan.berprestasi');
Route::get('/wisudawan/slide','WisudawanadminsController@slide')->name('wisudawan.slide');
Route::get('/wisudawan/export/excel','WisudawanadminsController@exportExcel')->name('wisudawan.export.excel');
Route::get('/wisudawan/hapus-semua-data-wisudawan','WisudawanadminsController@removeAll')->name('wisudawan.removeall');
Route::get('/wisudawan/download-photo','WisudawanadminsController@downloadPhoto')->name('wisudawan.downloadphoto');

Route::resource('/setting','SettingController', ['except' => ['create','show','destroy']]);