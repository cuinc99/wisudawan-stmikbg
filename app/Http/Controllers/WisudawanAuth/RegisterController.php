<?php

namespace App\Http\Controllers\WisudawanAuth;

use App\Angkatan;
use App\Dosen;
use App\Prodi;
use App\Wisudawan;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/wisudawan/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('wisudawan.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nim' => 'required|max:10|unique:wisudawans',
            'nama' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'hp' => 'required|max:255',
            'ipk' => 'required|max:4',
            'email' => 'required|email|max:255|unique:wisudawans',
            'judul' => 'required',
            'prodi_id' => 'required|numeric',
            'angkatan_id' => 'required|numeric',
            'dosen_id' => 'required|numeric',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Wisudawan
     */
    protected function create(array $data)
    {
        return Wisudawan::create([
            'nim' => $data['nim'],
            'nama' => $data['nama'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'alamat' => $data['alamat'],
            'hp' => $data['hp'],
            'ipk' => $data['ipk'],
            'email' => $data['email'],
            'judul' => $data['judul'],
            'prodi_id' => $data['prodi_id'],
            'angkatan_id' => $data['angkatan_id'],
            'dosen_id' => $data['dosen_id'],
            'password' => bcrypt($data['password']),
            'p' => $data['password'],
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $prodis = Prodi::all();
        $angkatans = Angkatan::all();
        $dosens = Dosen::all();
        return view('wisudawan.auth.register', compact('prodis','angkatans','dosens'));
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('wisudawan');
    }
}
