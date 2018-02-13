<?php

use App\Angkatan;
use App\Dosen;
use App\Prodi;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('wisudawan')->user();

    //dd($users);
    $prodis = Prodi::all();
    $angkatans = Angkatan::all();
    $dosens = Dosen::all();

    return view('wisudawan.home', compact('prodis','angkatans','dosens'));
})->name('home');

Route::put('/home/{wisudawan}','WisudawansController@update')->name('update');
Route::get('/preview','WisudawansController@preview')->name('preview');

