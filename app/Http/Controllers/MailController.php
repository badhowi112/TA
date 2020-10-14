<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Otomatis;
use Illuminate\Support\Facades\Mail;
use DB;
use App\dinas;
class MailController extends Controller
{
    //
    public function send(Request $request){

        Mail::to($request->to)->send(new Otomatis);
       
        return redirect('/pengaduan');
    }

    public function otomatis(Request $request){
        Mail::to($request->to)->send(new balas);
        return redirect('/contact');
    }
}
