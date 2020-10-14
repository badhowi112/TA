<?php

namespace App\Http\Controllers;
use Excel;
use \App\Exports\KalirejoExport;
use \App\Exports\DringuExport;
use \App\Exports\KalisalamExport;
use \App\Exports\KedungdalemExport;
use \App\Exports\MranggonLawangExport;
use \App\Exports\NgepohExport;
use \App\Exports\PabeanExport;
use \App\Exports\RanduputihExport;
use \App\Exports\SekarsareExport;
use \App\Exports\SumberagungExport;
use \App\Exports\SumbersukoExport;
use \App\Exports\TamansariExport;
use \App\Exports\TegalrejoExport;
use \App\Exports\WatuwungkukExport;
use Session;
use Illuminate\Http\Request;

class ExportDataWarga extends Controller
{
    public function index()
    {
        return view('Export.index');
    }
    public function export_watuwungkuk() 
    {
        return Excel::download(new WatuwungkukExport('Watuwungkuk'), 'Desa Watuwungkuk Kecamatan Dringu.xlsx');
    }
    public function export_tegalrejo()
    {
        return Excel::download(new TegalrejoExport('Tegalrejo'), 'Desa Tegalrejo Kecamatan Dringu.xlsx');
    }
    public function export_tamansari()
    {
        return Excel::download(new TamansariExport('Tamansari'), 'Desa Tamansari Kecamatan Dringu.xlsx');
    }
    public function export_sumbersuko()
    {
        return Excel::download(new SumbersukoExport('Sumbersuko'), 'Desa Sumbersuko Kecamatan Dringu.xlsx');
    }
    public function export_sumberagung()
    {
        return Excel::download(new SumberagungExport('Sumberagung'), 'Desa Sumberagung Kecamatan Dringu.xlsx');
    }
    public function export_sekarsare()
    {
        return Excel::download(new SekarsareExport('Sekarsare'), 'Desa Sekarsare Kecamatan Dringu.xlsx');
    }
    public function export_randuputih()
    {
        return Excel::download(new RanduputihExport('Randuputih'), 'Desa Randuputih Kecamatan Dringu.xlsx');
    }
    public function export_pabean()
    {
        return Excel::download(new PabeanExport('Pabean'), 'Desa Pabean Kecamatan Dringu.xlsx');
    }
    public function export_ngepoh()
    {
        return Excel::download(new NgepohExport('Ngepoh'), 'Desa Ngepoh Kecamatan Dringu.xlsx');
    }
    public function export_mranggon_lawang()
    {
        return Excel::download(new MranggonLawangExport('Mranggon Lawang'), 'Desa Mranggon Lawang Kecamatan Dringu.xlsx');
    }
    public function export_kedungdalem()
    {
        return Excel::download(new KedungdalemExport('Kedungdalem'), 'Desa Kedungdalem Kecamatan Dringu.xlsx');
    }
    public function export_kalisalam()
    {
        return Excel::download(new KalisalamExport('Kalisalam'), 'Desa Kalisalam Kecamatan Dringu.xlsx');
    }
    public function export_dringu()
    {
        return Excel::download(new DringuExport('DRINGU'), 'Desa Dringu Kecamatan Dringu.xlsx');
    }
    public function export_kalirejo()
    {
        return Excel::download(new KalirejoExport('Kalirejo'), 'Desa Kalirejo Kecamatan Dringu.xlsx');
    }
    public function reload_status(Request $request)
    {
        // $request->session()->flush();
        Session::forget(['Dringu_1']);
        return redirect('/export_data')->with('sukses','Status Pada Tabel telah update');
    }
}
