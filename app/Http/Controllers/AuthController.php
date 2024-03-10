<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'user') {
                return redirect()->intended('halaman');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        // dd($request->all());
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('email','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->level == 'user') {
                    return redirect()->intended('halaman');
                }
                return redirect()->intended('login');
            }

        notify()->error('username atau password salah!','Gagal!');
        return redirect('login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
    public function simpanregistrasi(Request $request){
        // dd($request->all());

        $dtUpload = new User;
        $dtUpload->name = $request->name;
        $dtUpload->email = $request->email;
        $dtUpload->password = bcrypt($request->password);
        $dtUpload->level = 'user';

        $dtUpload->save();

        notify()->success('Silahkan Login Kembali!', 'sukses');
        return redirect('login');
    }
    public function registrasi()
    {
        return view('registrasi');
    }
}
