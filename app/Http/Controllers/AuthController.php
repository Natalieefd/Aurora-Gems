<?php

namespace App\Http\Controllers;


// use Auth;
// use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function registerAction(Request $request)
    {
        if ($request->password == $request->confirm_password) {
            $usernameExist = User::where("username", $request->username)->first();
            if ($usernameExist) {
                session()->flash('error', 'Username sudah digunakan!');
                return redirect('/register');
            }
            User::create([
                'name' => $request->nama,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => "user",
            ]);
            session()->flash('success', 'Akun berhasil dibuat!');
            return redirect('/login');
        } else {
            session()->flash('error', 'Konfirmasi password anda salah!');
            return redirect('/register');
        }
    }

    public function loginAction(Request $request) {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        // if ($data['username'] == 'aurora' && $data['password'] == '123') {
        //     return redirect('/admin/dashboard');
        // }

        if (Auth::attempt($data)) {
            if(Auth::user()->username == 'aurora') {
                return redirect('/admin/dashboard');
            }
            return redirect('/pengguna/dashboard');
        }
        // else {
        //     // Tampilkan pesan kesalahan jika otentikasi gagal
        //     session()->flash('error', 'Username atau Password anda salah!');
        //     return redirect('/login');
        // }
    }



    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}

