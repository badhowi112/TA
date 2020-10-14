<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Excel;
use \App\Imports\DringuImport;
use \App\Exports\DringuExport;
use \App\Data_news;
use \App\data_news_2;
use Illuminate\Http\Request;

class TblDringuController extends Controller
{
    //

    public function kirim_data_tksk()
    {
        return view('KirimData.kirim_tksk_dringu');
    }
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $Dringu = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $ngepoh = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $kedungdalem = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $kalisalam = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $pabean = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $tamansari = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $mranggon_lawang = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $randuputih = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $sumberagung = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $sumbersuko = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $watuwungkuk = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $sekarkare = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $tegalrejo = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            $kalirejo = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();

        }else{
            $Dringu = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="DRINGU" ORDER BY keterangan');
            $ngepoh = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="NGEPOH" ORDER BY keterangan');
            $kedungdalem = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="KEDUNGDALEM" ORDER BY keterangan');
            $kalisalam = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="KALISALAM" ORDER BY keterangan');
            $pabean = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="PABEAN" ORDER BY keterangan');
            $tamansari = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="TAMANSARI"');
            $mranggon_lawang = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="MRANGGON_LAWANG" ORDER BY keterangan');
            $randuputih = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="RANDUPUTIH" ORDER BY keterangan');
            $sumberagung = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="SUMBERAGUNG" ORDER BY keterangan');
            $sumbersuko = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="SUMBERSUKO" ORDER BY keterangan');
            $watuwungkuk = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="WATUWUNGKUK" ORDER BY keterangan');
            $sekarkare = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="SEKARKARE" ORDER BY keterangan');
            $tegalrejo = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="TEGALREJO" ORDER BY keterangan');
            $kalirejo = DB::select('SELECT id,nik,nama_krt,alamat,verifikasi,keterangan from data_news_2 where desa ="KALIREJO" ORDER BY keterangan');
        }
        $hasil = DB::select('select count(keterangan) as hasil from data_news_2 where keterangan = ?',[""]);
        //dd($Dringu);
        return view('DataWarga.Dringu',compact('Dringu','ngepoh'
    ,'kedungdalem','kalisalam','pabean','tamansari','mranggon_lawang',
'randuputih','sumberagung','sumbersuko','watuwungkuk','sekarkare','tegalrejo','hasil'));
// return view('DataWarga.Dringu',['Dringu' => $Dringu ,'ngepoh' => $ngepoh]);
    }
    public function import_dringu(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ],
    ['select_file.required' => 'File Harus Ada Ketika Di upload',
    'select_file.mimes' => 'Extensi File Harus xls, xlsx']);
        Excel::import(new DringuImport, $request->file('select_file'));
           return back()->with('Sukses','Data Berhasil Di Import');
    }
    public function delete($id)
    {
        # code...
        $data_warga = Data_news::find($id);
        $data_warga->delete();
        return back()->with('sukses','Data Berhasil di hapus');
    }
    public function edit($id)
    {
        $warga = Data_news::find($id);
        //$datawarga = DB::table('tbl_dringu')->where('id',$id)->get();
        return view('DataWarga.edit.EditDringu',['warga' => $warga]);
    }
    public function export_dringu()
    {
        return Excel::download(new DringuExport('Dringu'), 'Desa Dringu Kecamatan Dringu.xlsx');
    }
    public function update(Request $request,$id)
    {
       $this->validate($request,[

       ]);
        $warga = Data_news::find($id);
        $warga->update($request->all());
        return redirect('/data_warga_1')->with('sukses','Data Telah Di Perbarui');
    }
    public function import_dringu_page()
    {
        return view('ImportPage.DringuImport');
    }
}
