<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use \App\bps;
use \App\Data_news;
use Phpml\Classification\NaiveBayes;
use Phpml\SupportVectorMachine\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Storage;
use Session;
class DataWargaController extends Controller
{
    //
    public function download_template()
    {
        return Storage::disk('local')->download('public/template.xlsx');
        // try {
        // } catch (\Exception $e) {
        //     //throw $th;
        //     return $e->getMessage();
        // }
    }
    public function index(Request $request){
        if($request->has('cari'))
        {
            $db = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();

        }else{
            $db = DB::select('select id,nik,kecamatan,desa,nama_krt,alamat,kecamatan,keterangan,verifikasi,saran FROM data_news_2 ORDER by keterangan asc');
        }
        $verif = DB::select('select count(verifikasi) as hasil from data_news_2 where verifikasi = ?',[1]);
        $veri = DB::select('select count(verifikasi) as hasil from data_news_2 where verifikasi = ?',[0]);
        $dr = DB::select('select count(verifikasi) as hasil from data_news_2 where verifikasi = ?',[0]);
        return view('DataWarga.index',compact('db','verif','veri','dr'));
    }

    public function index2()
    {
        # code...
    }
    public function spk(Request $request)
    {
        $data1 = DB::select('select
        id,
        nik,
        kecamatan,
        desa,
        nama_krt,
        alamat,
        jumlah_art,
        jumlah_keluarga,
        sta_bangunan,
        sta_lahan,
        luas_lantai,
        lantai,
        dinding,
        kondisi_dinding,
        atap,
        kondisi_atap,
        jumlah_kamar,
        sumber_airminum,
        nomor_meter_air,
        cara_peroleh_airminum,
        sumber_penerangan,
        daya,
        nomor_pln,
        bb_masak,
        nomor_gas,
        fasbab,
        kloset,
        buang_tinja,
        ada_tabung_gas,
        ada_laptop,
        ada_lemari_es,
        ada_sepeda,
        ada_ac,
        ada_motor,
        ada_pemanas,
        ada_mobil,
        ada_telepon,
        ada_perahu,
        ada_tv,
        ada_motor_tempel,
        ada_emas,
        ada_perahu_motor,
        ada_kapal,
        aset_tak_bergerak,
        luas_atb,
        rumah_lain,
        jumlah_sapi,
        jumlah_babi,
        jumlah_kerbau,
        jumlah_kambing,
        jumlah_kuda,
        sta_kks,
        sta_jamsostek,
        sta_kip,
        sta_asuransi,
        sta_kis,
        sta_pkh,
        sta_bpjs_mandiri,
        sta_rastra,
        sta_kur,
        keterangan,
        verifikasi from data_news_2 where verifikasi = ? ',[1]);

        $data2 = DB::select('select
        id,
        nik,
        kecamatan,
        desa,
        nama_krt,
        alamat,
        jumlah_art,
        jumlah_keluarga,
        sta_bangunan,
        sta_lahan,
        luas_lantai,
        lantai,
        dinding,
        kondisi_dinding,
        atap,
        kondisi_atap,
        jumlah_kamar,
        sumber_airminum,
        nomor_meter_air,
        cara_peroleh_airminum,
        sumber_penerangan,
        daya,
        nomor_pln,
        bb_masak,
        nomor_gas,
        fasbab,
        kloset,
        buang_tinja,
        ada_tabung_gas,
        ada_laptop,
        ada_lemari_es,
        ada_sepeda,
        ada_ac,
        ada_motor,
        ada_pemanas,
        ada_mobil,
        ada_telepon,
        ada_perahu,
        ada_tv,
        ada_motor_tempel,
        ada_emas,
        ada_perahu_motor,
        ada_kapal,
        aset_tak_bergerak,
        luas_atb,
        rumah_lain,
        jumlah_sapi,
        jumlah_babi,
        jumlah_kerbau,
        jumlah_kambing,
        jumlah_kuda,
        sta_kks,
        sta_jamsostek,
        sta_kip,
        sta_asuransi,
        sta_kis,
        sta_pkh,
        sta_bpjs_mandiri,
        sta_rastra,
        sta_kur,
        keterangan,
        verifikasi from data_news_2 where verifikasi = ? ',[0]);


     //bagian variabel penyimpanan array
    $samples = array(array());
    $labels = array();
    $i = 0;
    $data_id = array();
    //karena nilai harus berada di array dalam array
    foreach ($data1 as $data) {
        $data = get_object_vars($data);
        $data_id[$i] = $data['id'];
        $samples[$i][0] = $data['jumlah_art'];
        $samples[$i][1] = $data['jumlah_keluarga'];
        $samples[$i][2] = $data['sta_bangunan'];
        $samples[$i][3] = $data['sta_lahan'];
        $samples[$i][4] = $data['lantai'];
        $samples[$i][5] = $data['dinding'];
        $samples[$i][6] = $data['kondisi_dinding'];
        $samples[$i][7] = $data['atap'];
        $samples[$i][8] = $data['kondisi_atap'];
        $samples[$i][9] = $data['jumlah_kamar'];
        $samples[$i][10] = $data['sumber_airminum'];
        $samples[$i][11] = $data['cara_peroleh_airminum'];
        $samples[$i][12] = $data['sumber_penerangan'];
        $samples[$i][13] = $data['daya'];
        $samples[$i][14] = $data['bb_masak'];
        $samples[$i][15] = $data['fasbab'];
        $samples[$i][16] = $data['kloset'];
        $samples[$i][17] = $data['buang_tinja'];
        $samples[$i][18] = $data['ada_tabung_gas'];
        $samples[$i][19] = $data['ada_laptop'];
        $samples[$i][20] = $data['ada_lemari_es'];
        $samples[$i][21] = $data['ada_sepeda'];
        $samples[$i][22] = $data['ada_ac'];
        $samples[$i][23] = $data['ada_motor'];
        $samples[$i][24] = $data['ada_pemanas'];
        $samples[$i][25] = $data['ada_mobil'];
        $samples[$i][26] = $data['ada_telepon'];
        $samples[$i][27] = $data['ada_perahu'];
        $samples[$i][28] = $data['ada_tv'];
        $samples[$i][29] = $data['ada_motor_tempel'];
        $samples[$i][30] = $data['ada_emas'];
        $samples[$i][31] = $data['ada_perahu_motor'];
        $samples[$i][32] = $data['ada_kapal'];
        $samples[$i][33] = $data['aset_tak_bergerak'];
        $samples[$i][34] = $data['rumah_lain'];
        $samples[$i][35] = $data['jumlah_sapi'];
        $samples[$i][36] = $data['jumlah_babi'];
        $samples[$i][37] = $data['jumlah_kerbau'];
        $samples[$i][38] = $data['jumlah_kambing'];
        $samples[$i][39] = $data['jumlah_kuda'];
        $samples[$i][40] = $data['sta_kks'];
        $samples[$i][41] = $data['sta_jamsostek'];
        $samples[$i][42] = $data['sta_kip'];
        $samples[$i][43] = $data['sta_asuransi'];
        $samples[$i][44] = $data['sta_kis'];
        $samples[$i][45] = $data['sta_pkh'];
        $samples[$i][46] = $data['sta_bpjs_mandiri'];
        $samples[$i][47] = $data['sta_rastra'];
        $samples[$i][48] = $data['sta_kur'];
        // $samples[$i][49] = $data['gaji'];
        // $samples[$i][50] = $data['beasiswa'];
        // $samples[$i][49] = $data['KETERANGAN'];
        // $samples[$i][50] = $data['SARAN'];
        // $samples[$i][51] = $data['VERIFIKASI'];
        $labels[$i] = $data["keterangan"];


        $i++;
      }
       //classifier bagian user yg belum verifikasi
    $samples_1 = array(array());
    $labels_1 = array();
    $y = 0;
    $data_id_1 = array();
    //
    foreach ($data2 as $data1) {
      $data1 = get_object_vars($data1);
      $data_id_1[$y] = $data1['id'];
      $samples_1[$y][0] = $data1['jumlah_art'];
      $samples_1[$y][1] = $data1['jumlah_keluarga'];
      $samples_1[$y][2] = $data1['sta_bangunan'];
      $samples_1[$y][3] = $data1['sta_lahan'];
      $samples_1[$y][4] = $data1['lantai'];
      $samples_1[$y][5] = $data1['dinding'];
      $samples_1[$y][6] = $data1['kondisi_dinding'];
      $samples_1[$y][7] = $data1['atap'];
      $samples_1[$y][8] = $data1['kondisi_atap'];
      $samples_1[$y][9] = $data1['jumlah_kamar'];
      $samples_1[$y][10] = $data1['sumber_airminum'];
      $samples_1[$y][11] = $data1['cara_peroleh_airminum'];
      $samples_1[$y][12] = $data1['sumber_penerangan'];
      $samples_1[$y][13] = $data1['daya'];
      $samples_1[$y][14] = $data1['bb_masak'];
      $samples_1[$y][15] = $data1['fasbab'];
      $samples_1[$y][16] = $data1['kloset'];
      $samples_1[$y][17] = $data1['buang_tinja'];
      $samples_1[$y][18] = $data1['ada_tabung_gas'];
      $samples_1[$y][19] = $data1['ada_laptop'];
      $samples_1[$y][20] = $data1['ada_lemari_es'];
      $samples_1[$y][21] = $data1['ada_sepeda'];
      $samples_1[$y][22] = $data1['ada_ac'];
      $samples_1[$y][23] = $data1['ada_motor'];
      $samples_1[$y][24] = $data1['ada_pemanas'];
      $samples_1[$y][25] = $data1['ada_mobil'];
      $samples_1[$y][26] = $data1['ada_telepon'];
      $samples_1[$y][27] = $data1['ada_perahu'];
      $samples_1[$y][28] = $data1['ada_tv'];
      $samples_1[$y][29] = $data1['ada_motor_tempel'];
      $samples_1[$y][30] = $data1['ada_emas'];
      $samples_1[$y][31] = $data1['ada_perahu_motor'];
      $samples_1[$y][32] = $data1['ada_kapal'];
      $samples_1[$y][33] = $data1['aset_tak_bergerak'];
      $samples_1[$y][34] = $data1['rumah_lain'];
      $samples_1[$y][35] = $data1['jumlah_sapi'];
      $samples_1[$y][36] = $data1['jumlah_babi'];
      $samples_1[$y][37] = $data1['jumlah_kerbau'];
      $samples_1[$y][38] = $data1['jumlah_kambing'];
      $samples_1[$y][39] = $data1['jumlah_kuda'];
      $samples_1[$y][40] = $data1['sta_kks'];
      $samples_1[$y][41] = $data1['sta_jamsostek'];
      $samples_1[$y][42] = $data1['sta_kip'];
      $samples_1[$y][43] = $data1['sta_asuransi'];
      $samples_1[$y][44] = $data1['sta_kis'];
      $samples_1[$y][45] = $data1['sta_pkh'];
      $samples_1[$y][46] = $data1['sta_bpjs_mandiri'];
      $samples_1[$y][47] = $data1['sta_rastra'];
      $samples_1[$y][48] = $data1['sta_kur'];


      $labels_1[$y] = $data1["keterangan"];


      $y++;

    }
    // dd($data_id_1,$samples_1,$labels_1);

    $classifier = new NaiveBayes();
    $classifier->train($samples,$labels);
    $array_hasil = $classifier->predict($samples_1);

    // dd($array_hasil);
    //update database
    for($z=0; $z<sizeof($data_id_1);$z++ ){
    $array_hasil_predict = DB::update('update data_news_2 set verifikasi = 1 where data_news_2.id = ?', [$data_id_1[$z]]);

      //kurang keterangan
    // $array_keterangan = DB::update('update data_news_2 set keterangan = ? where data_news_2.id = ?', [$array_hasil[$z],$data_id_1[$z]]);
    $array_saran = DB::update('update data_news_2 set saran = ? where data_news_2.id = ?', [$array_hasil[$z],$data_id_1[$z]]);


  }
    return back()->with('sukses','Data Telah Di Verifikasi Bagian Keterangan');

    }


    public function edit_ya($id)
    {
    $data_verifikasi_ya = DB::update('UPDATE data_news_2 set keterangan = saran WHERE id =  ?',[$id]);
    return redirect('/list_data_warga')->with('sukses','Data Berhasil Di Ubah');

    }
    public function edit_tidak($id)
    {
      $data_verifikasi_tidak = DB::update('update data_news_2 set keterangan = CASE WHEN keterangan = "mampu" THEN "tidak_mampu"
      WHEN keterangan = "tidak_mampu" THEN "mampu" END where data_news_2.id = ?',[$id]);
      return redirect('/list_data_warga')->with('sukses','Data Berhasil Di Ubah');
    }
    public function addWarga(){
        return view('DataWarga.create.add');
    }
    public function create(Request $request){

        $this->validate($request,[
            'nik' => 'required|numeric|unique:data_news_2,nik|min:16',
            'kecamatan' => 'required',
            'desa' => 'required',
            'nama_krt' => 'required',
            'alamat' => 'required',
            'jumlah_art' => 'required|integer|min:0',
            'jumlah_keluarga' => 'required|numeric',
            'sta_bangunan' => 'required|numeric',
            'sta_lahan' => 'required|numeric',
            'luas_lantai' => 'required|numeric',
            'lantai' => 'required|numeric',
            'dinding' => 'required|numeric',
            'kondisi_dinding' => 'required|numeric',
            'atap' => 'required|numeric',
            'kondisi_atap' => 'required|numeric',
            'jumlah_kamar' => 'required|numeric',
            'sumber_airminum' => 'required|numeric',
            'nomor_meter_air' => 'required|numeric',
            'cara_peroleh_airminum' => 'required|numeric',
            'sumber_penerangan' => 'required|numeric',
            'daya' => 'required|numeric',
            'nomor_pln' => 'required|numeric',
            'bb_masak' => 'required|numeric',
            'nomor_gas' => 'required|numeric',
            'fasbab' => 'required|numeric',
            'kloset' => 'required|numeric',
            'buang_tinja' => 'required|numeric',
            'ada_tabung_gas' => 'required|numeric',
            'ada_laptop' => 'required|numeric',
            'ada_lemari_es' => 'required|numeric',
            'ada_sepeda' => 'required|numeric',
            'ada_ac' => 'required|numeric',
            'ada_motor' => 'required|numeric',
            'ada_pemanas' => 'required|numeric',
            'ada_mobil' => 'required|numeric',
            'ada_telepon' => 'required|numeric',
            'ada_perahu' => 'required|numeric',
            'ada_tv' => 'required|numeric',
            'ada_motor_tempel' => 'required|numeric',
            'ada_emas' => 'required|numeric',
            'ada_perahu_motor' => 'required|numeric',
            'ada_kapal' => 'required|numeric',
            'aset_tak_bergerak' => 'required|numeric',
            'luas_atb' => 'required|numeric',
            'rumah_lain' => 'required|numeric',
            'jumlah_sapi' => 'required|numeric',
            'jumlah_babi' => 'required|numeric',
            'jumlah_kerbau' => 'required|numeric',
            'jumlah_kambing' => 'required|numeric',
            'jumlah_kuda' => 'required|numeric',
            'sta_kks' => 'required|numeric',
            'sta_jamsostek' => 'required|numeric',
            'sta_kip' => 'required|numeric',
            'sta_asuransi' => 'required|numeric',
            'sta_kis' => 'required|numeric',
            'sta_pkh' => 'required|numeric',
            'sta_bpjs_mandiri' => 'required|numeric',
            'sta_rastra' => 'required|numeric',
            'sta_kur' => 'required|numeric'
        ],[
            'nik.unique' => 'NIK Sudah Ada Di DATABASE',
            'nik.min' => 'Jumlah NIK Harus 16 Digit'
        ]);

        $data = Data_news::create($request -> all());
        // dd($data);
        return redirect('/addwarga')->with('data',$data)->with('sukses','Data Warga Berhasil Di Tambahkan');
    }
    public function delete($id){

    }

    public function update(Request $request)
    {
        # code...
        $warga = DB::table('data_news')->where('id_data_warga',$id)->update([
            'NIK' => $request->NIK,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'NAMA_KRT' => $request->NAMA_KRT,
            'ALAMAT' => $request->ALAMAT,
            'JUMLAH_ART' => $request->JUMLAH_ART,
            'JUMLAH_KELUARGA' => $request->JUMLAH_KELUARGA,
            'STA_BANGUNAN' => $request->STA_BANGUNAN,
            'STA_LAHAN' => $request->STA_LAHAN,
            'LUAS_LANTAI' => $request->LUAS_LANTAI,
            'LANTAI' => $request->LANTAI,
            'DINDING' => $request->DINDING,
            'KONDISI_DINDING' => $request->KONDISI_DINDING,
            'ATAP' => $request->ATAP,
            'KONDISI_ATAP' => $request->KONDISI_ATAP,
            'JUMLAH_KAMAR' => $request->JUMLAH_KAMAR,
            'SUMBER_AIRMINUM' => $request->SUMBER_AIRMINUM,
            'NOMOR_METER_AIR' => $request->NOMOR_METER_AIR,
            'CARA_PEROLEH_AIRMINUM' => $request->CARA_PEROLEH_AIRMINUM,
            'SUMBER_PENERANGAN' => $request->SUMBER_PENERANGAN,
            'DAYA' => $request->DAYA,
            'NOMOR_PLN' => $request->NOMOR_PLN,
            'BB_MASAK' => $request->BB_MASAK,
            'NOMOR_GAS' => $request->NOMOR_GAS,
            'FASBAB' => $request->FASBAB,
            'KLOSET' => $request->KLOSET,
            'BUANG_TINJA' => $request->BUANG_TINJA,
            'ADA_TABUNG_GAS' => $request->ADA_TABUNG_GAS,
            'ADA_LAPTOP' => $request->ADA_LAPTOP,
            'ADA_LEMARI_ES' => $request->ADA_LEMARI_ES,
            'ADA_SEPEDA' => $request->ADA_SEPEDA,
            'ADA_AC' => $request->ADA_AC,
            'ADA_MOTOR' => $request->ADA_MOTOR,
            'ADA_PEMANAS' => $request->ADA_PEMANAS,
            'ADA_MOBIL' => $request->ADA_MOBIL,
            'ADA_TELEPON' => $request->ADA_TELEPON,
            'ADA_PERAHU' => $request->ADA_PERAHU,
            'ADA_TV' => $request->ADA_TV,
            'ADA_MOTOR_TEMPEL' => $request->ADA_MOTOR_TEMPEL,
            'ADA_EMAS' => $request->ADA_EMAS,
            'ADA_PERAHU_MOTOR' => $request->ADA_PERAHU_MOTOR,
            'ADA_KAPAL' => $request->ADA_KAPAL,
            'ASET_TAK_BERGERAK' => $request->ASET_TAK_BERGERAK,
            'LUAS_ATB' => $request->LUAS_ATB,
            'RUMAH_LAIN' => $request->RUMAH_LAIN,
            'JUMLAH_SAPI' => $request->JUMLAH_SAPI,
            'JUMLAH_BABI' => $request->JUMLAH_BABI,
            'JUMLAH_KERBAU' => $request->JUMLAH_KERBAU,
            'JUMLAH_KAMBING' => $request->JUMLAH_KAMBING,
            'JUMLAH_KUDA' => $request->JUMLAH_KUDA,
            'STA_KKS' => $request->STA_KKS,
            'STA_JAMSOSTEK' => $request->STA_JAMSOSTEK,
            'STA_KIP' => $request->STA_KIP,
            'STA_ASURANSI' => $request->STA_ASURANSI,
            'STA_KIS' => $request->STA_KIS,
            'STA_PKH' => $request->STA_PKH,
            'STA_BPJS_MANDIRI' => $request->STA_BPJS_MANDIRI,
            'STA_RASTRA' => $request->STA_RASTRA,
            'STA_KUR' => $request->STA_KUR

               ]);
               return redirect('')->with('sukses','Data Telah Di Perbarui');
    }
    public function Dringu(Request $request){
        if($request->has('cari'))
        {
            $Dringu = \App\Data_news::where('nama_krt','LIKE','%' .$request->cari. '%')->get();
            // $Dringu = bps::select('select * from data_news where NAMA_KRT LIKE '."%".$request->cari."%");

        }else{
            $Dringu = DB::select('select
            id,
            nik,
            kecamatan,
            nama_krt,
            alamat,
            jumlah_art,
            jumlah_keluarga,
            sta_bangunan,
            sta_lahan,
            luas_lantai,
            lantai,
            dinding,
            kondisi_dinding,
            atap,
            kondisi_atap,
            jumlah_kamar,
            sumber_airminum,
            nomor_meter_air,
            cara_peroleh_airminum,
            sumber_penerangan,
            daya,
            nomor_pln,
            bb_masak,
            nomor_gas,
            fasbab,
            kloset,
            buang_tinja,
            ada_tabung_gas,
            ada_laptop,
            ada_lemari_es,
            ada_sepeda,
            ada_ac,
            ada_motor,
            ada_pemanas,
            ada_mobil,
            ada_telepon,
            ada_perahu,
            ada_tv,
            ada_motor_tempel,
            ada_emas,
            ada_perahu_motor,
            ada_kapal,
            aset_tak_bergerak,
            luas_atb,
            rumah_lain,
            jumlah_sapi,
            jumlah_babi,
            jumlah_kerbau,
            jumlah_kambing,
            jumlah_kuda,
            sta_kks,
            sta_jamsostek,
            sta_kip,
            sta_asuransi,
            sta_kis,
            sta_pkh,
            sta_bpjs_mandiri,
            sta_rastra,
            sta_kur,
            keterangan,
            verifikasi
            from data_news_2 where desa = "DRINGU"');
        }

       
            return view('DataWarga.Dringu',compact('Dringu'));
    }
   
}
