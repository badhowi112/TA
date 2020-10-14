<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\dinas;
class DashboardController extends Controller
{
    //

    public function index(){
        $data = DB::select('select status, COUNT(*) as number from dinas GROUP BY status');

        $box = DB::select('select COUNT(status) as hasil FROM dinas');
        $data_warga = DB::select('select KETERANGAN, COUNT(*) as number from data_news GROUP BY KETERANGAN');
        $diagram = DB::select('select COUNT(id) as hasil FROM data_news');
        return view('dashboard.index',['data' => $data],compact('box','data_warga','diagram'));
    }

    public function dh_koordinator(){
        $data = DB::select('select status, COUNT(*) as number from dinas GROUP BY status');

        $box = DB::select('select COUNT(status) as hasil FROM dinas');
        $data_warga = DB::select('select KETERANGAN, COUNT(*) as number from data_news GROUP BY KETERANGAN');
        $diagram = DB::select('select COUNT(id) as hasil FROM data_news');
        return view('dashboard.dashboard_koor',['data' => $data],compact('box','data_warga','diagram'));
    }
    public function dh_opdes(){
        $DRINGU = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "DRINGU"');
        $KALIREJO = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "KALIREJO" ');
        $KALISALAM = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "KALISALAM" ');
        $KEDUNGDALEM = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "KEDUNGDALEM" ');
        $MRANGGONLAWANG = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "MRANGGONLAWANG" ');
        $NGEPOH = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "NGEPOH" ');
        $PABEAN = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "PABEAN" ');
        $RANDUPUTIH = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "RANDUPUTIH" ');
        $SEKARSARE = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "SEKARSARE" ');
        $SUMBERAGUNG = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "SUMBERAGUNG" ');
        $SUMBERSUKO = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "SUMBERSUKO" ');
        $TAMANSARI = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "TAMANSARI" ');
        $TEGALREJO = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "TEGALREJO" ');
        $WATUWUNGKUK = DB::select('select COUNT(IF( verifikasi = 1, verifikasi, null)) as hasil1, COUNT(IF( keterangan = ".",keterangan, null)) as hasil2 FROM data_news_2 WHERE desa = "WATUWUNGKUK" ');

        $diagram = DB::select('select COUNT(id) as hasil FROM data_news_2');
        $tbl_dringu = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "DRINGU"');
        $tbl_kalirejo = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "KALIREJO"');
        $tbl_kalisalam = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "KALISALAM"');
        $tbl_kedungdalem = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "KEDUNGDALEM"');
        $tbl_mranggon_lawang = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "MRANGGON LAWANG"');
        $tbl_ngepoh = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "NGEPOH"');
        $tbl_pabean = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "PABEAN"');
        $tbl_randuputih = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "RANDUPUTIH"');
        $tbl_sekarsare = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "SEKARSARE"');
        $tbl_sumberagung = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "SUMBERAGUNG"');
        $tbl_sumbersuko = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "SUMBERSUKO"');
        $tbl_tamansari = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "TAMANSARI"');
        $tbl_tegalrejo = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "TEGALREJO"');
        $tbl_watuwungkuk = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "WATUWUNGKUK"');
        return view('dashboard.dashboard_opdes',compact('DRINGU','SUMBERAGUNG','diagram','tbl_dringu','tbl_kalirejo','tbl_kalisalam',
        'tbl_kedungdalem','tbl_mranggon_lawang','tbl_ngepoh','tbl_pabean','tbl_randuputih','tbl_sekarsare','tbl_sumberagung',
    'tbl_sumbersuko','tbl_tamansari','tbl_tegalrejo','tbl_watuwungkuk',
'KALIREJO','KALISALAM','KEDUNGDALEM','MRANGGONLAWANG','NGEPOH','PABEAN','RANDUPUTIH','SEKARSARE','SUMBERAGUNG',
'SUMBERSUKO','TAMANSARI','TEGALREJO','WATUWUNGKUK'));
    }

    public function dh_tksk(){
        $data = DB::select('select status, COUNT(*) as number from dinas GROUP BY status');
        $tbl_dringu = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "dringu"');
        $tbl_kalirejo = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "kalirejo"');
        $tbl_kalisalam = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "kalisalam"');
        $tbl_kedungdalem = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "kedungdalem"');
        $tbl_mranggon_lawang = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "mranggon lawang"');
        $tbl_ngepoh = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "ngepoh"');
        $tbl_pabean = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "pabean"');
        $tbl_randuputih = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "randuputih"');
        $tbl_sekarsare = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "sekarsare"');
        $tbl_sumberagung = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "sumberagung"');
        $tbl_sumbersuko = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "sumbersuko"');
        $tbl_tamansari = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "tamansari"');
        $tbl_tegalrejo = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "tegalrejo"');
        $tbl_watuwungkuk = DB::select('select COUNT(desa) as hasil FROM data_news_2 where desa = "watuwungkuk"');

        $data_warga_1 = DB::select('SELECT COUNT(IF(keterangan = "mampu",keterangan,null)) as number1,
        COUNT(IF(keterangan = "tidak_mampu",keterangan,null)) as number2
        FROM data_news_2 GROUP BY desa');
        $data_warga_2 = DB::select('SELECT COUNT(*) as number2 FROM data_news_2 WHERE keterangan = "tidak_mampu" GROUP BY desa');
        return view('dashboard.dh_tksk',compact('data_warga_1','data_warga_2','tbl_dringu','data','tbl_kalirejo','tbl_kalisalam',
    'tbl_kedungdalem','tbl_mranggon_lawang','tbl_ngepoh','tbl_pabean','tbl_randuputih','tbl_sekarsare','tbl_sumberagung',
'tbl_sumbersuko','tbl_tamansari','tbl_tegalrejo','tbl_watuwungkuk'));
    }
}

