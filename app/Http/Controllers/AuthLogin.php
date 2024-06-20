<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class AuthLogin extends Controller
{
    public function login()
    {
        return view('login', ['title' => 'Halaman Login']);
    }


    public function authentication(Request $request)
    {


        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            if (Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();


                Session::flash('status', 'invalid');
                Session::flash('message', 'Akun anda belum aktif hubungi admin');
                return redirect('/login');
            }


            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('/dashboard');
            }
            if (Auth::user()->role_id == 2) {
                return redirect('profil');
            }
        }

        Session::flash('status', 'invalid');
        Session::flash('message', 'Login Gagal Akun Anda Tidak Ada');
        return redirect('login');
    }


    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}