<?php

namespace App\Http\Controllers;


use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;



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
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
            session()->flash('success', 'Akun berhasil dibuat!');
            return redirect('/login');
        } else {
            session()->flash('error', 'Konfirmasi password anda salah!');
            return redirect('/register');
        }
    }

    public function loginAction(Request $request)
    {
        if(Auth::check()){
            if(Auth::user()->role=='admin'){
                if('username'=="admin"&&'password'=="123"){
                    return redirect('/admin/dashboard');
                }else{
                    session()->flash('error', 'Username atau Password anda salah!');
                    return redirect('/login');
            }
        }else{
            $data = [
                'username' => $request->username,
                'password' => $request->password,
            ];
            if (Auth::attempt($data)) {
                return redirect('/pengguna/dashboard');
            } else {
                session()->flash('error', 'Username atau Password anda salah!');
                return redirect('/login');
            }
        }
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}

