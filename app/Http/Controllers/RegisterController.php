<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function register()
    {
        return view('register', ['title' => 'Halaman Register']);
    }
    public function registersubmit(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'addres' => 'required'

        ]);

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'register berhasil hubungi admin untuk approve akun anda');
        return redirect('/register');
    }
}