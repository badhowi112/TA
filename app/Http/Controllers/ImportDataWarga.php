<?php

namespace App\Http\Controllers;
use Excel;
use \App\Imports\DringuImport;
use \App\Imports\KalirejoImport;
use \App\Imports\KalisalamImport;
use \App\Imports\KedungdalemImport;
use \App\Imports\MranggonLawangImport;
use \App\Imports\NgepohImport;
use \App\Imports\PabeanImport;
use \App\Imports\RanduputihImport;
use \App\Imports\SekarsareImport;
use \App\Imports\SumberagungImport;
use \App\Imports\SumbersukoImport;
use \App\Imports\TamansariImport;
use \App\Imports\TegalrejoImport;
use \App\Imports\WatuwungkukImport;
use \App\Data_news;

use Illuminate\Http\Request;

class ImportDataWarga extends Controller
{
    public function import_watuwungkuk(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new WatuwungkukImport, $request->file('select_file'));
        $request->session()->put('Watuwungkuk',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_tegalrejo(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new TegalrejoImport, $request->file('select_file'));
        $request->session()->put('Tegalrejo',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_tamansari(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new TamansariImport, $request->file('select_file'));
        $request->session()->put('Tamansari',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_sumbersuko(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new SumbersukoImport, $request->file('select_file'));
        $request->session()->put('Sumbersuko',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_sumberagung(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new SumberagungImport, $request->file('select_file'));
        $request->session()->put('Sumberagung',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_sekarsare(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new SekarsareImport, $request->file('select_file'));
        $request->session()->put('Sekarsare',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_randuputih(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new RanduputihImport, $request->file('select_file'));
        $request->session()->put('Randuputih',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_pabean(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new PabeanImport, $request->file('select_file'));
        $request->session()->put('Pabean',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_ngepoh(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new NgepohImport, $request->file('select_file'));
        $request->session()->put('Ngepoh',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_dringu(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'           
        ],
    ['select_file.required' => 'File Harus Ada Ketika Di upload',
    'select_file.mimes' => 'Extensi File Harus xls, xlsx'
    ]);
        Excel::import(new DringuImport, $request->file('select_file'));
        $request->session()->put('Dringu',$request->input());

        // $output=$request->session()->get('Dringu');

           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_kalirejo(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new KalirejoImport, $request->file('select_file'));
        $request->session()->put('Kalirejo',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_kalisalam(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new KalisalamImport, $request->file('select_file'));
        $request->session()->put('Kalisalam',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_kedungdalem(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new KedungdalemImport, $request->file('select_file'));
        $request->session()->put('Kedungdalem',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function import_mranggon_lawang(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
        ['select_file.required' => 'File Harus Ada Ketika Di upload',
        'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new MranggonLawangImport, $request->file('select_file'));
        $request->session()->put('Mranggon_Lawang',$request->input());
           return back()->with('Sukses','Data Berhasil Di Import');
    }
}
