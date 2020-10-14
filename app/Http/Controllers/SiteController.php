<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function portfolio_details(){
        return view('sites.portfolio_details');
    }
    public function about(){
        return view('sites.about');
    }
    public function tugas(){
        return view('sites.tugas');
    }
    public function struktur(){
        return view('sites.struktur');
    }
    public function agenda(){
        return view('sites.agenda');
    }
    public function berita(){
        return view('sites.berita');
    }
    public function berita1(){
        return view('sites.berita1');
    }
    public function berita2(){
        return view('sites.berita2');
    }
    public function berita3(){
        return view('sites.berita3');
    }
    public function beritanew(){
        return view('sites.beritanew');
    }
    public function pengumuman(){
        return view('sites.pengumuman');
    }
    public function dayasos(){
        return view('sites.dayasos');
    }
    public function linjamsos(){
        return view('sites.linjamsos');
    }
    public function rehsos(){
        return view('sites.rehsos');
    }
    public function portfolio(){
        return view('sites.portfolio');
    }
    public function contact(){

        return view('sites.contact');
    }
}
