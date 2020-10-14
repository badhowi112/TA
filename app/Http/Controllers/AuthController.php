<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class AuthController extends Controller
{
    //view untuk halaman login
    public function index(){
        return view('auths.lo-gin');
    }

    public function postlogin(Request $request){
        //mengecek username dan password pada database
        if(Auth::attempt($request->only('username','password'))){
            //konisi pengalihan halaman sesuai level
            // if (auth()->user()->level == 'admin'){
            //     return redirect('/dashboard');
            //  //konisi pengalihan halaman sesuai level
            // }
            if (auth()->user()->level == 'tksk'){
                return redirect('/dashboard_v2');
             //konisi pengalihan halaman sesuai level
            }if (auth()->user()->level == 'opdes'){
                return redirect('/dashboard_v3');
             //konisi pengalihan halaman sesuai level
            }
            // if (auth()->user()->level == 'koordinator'){
            //     return redirect('/dashboard_v4');
            // }           
        }
        //jika gagal menuju halaman login dan menampilkan pesan error
        return redirect('/')->with('Failed','Nama atau Kata Sandi Salah');
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/')->with('Logout','Berhasil Logout');
    }
}
