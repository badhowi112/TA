<?php

namespace App\Http\Controllers;
use App\dinas;
use DB;
use App\Mail\NotifikasiOtomatis;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\balas;
use File;

class PengaduanController extends Controller
{
    //
    public function index(){
        // $data_pengaduan = DB::select('select * from dinas') ;
        $data_pengaduan = dinas::all();
        $box = DB::select('SELECT COUNT(id) as hasil from dinas');
        return view('crud.index',['data_pengaduan'=> $data_pengaduan],['box' => $box]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'pengaduan' => 'required',
            'gambar' => 'required|mimes:jpg,png,jpeg'
        ],[
            'gambar.mimes' => 'Gambar Harus Berupa JPG, PNG, JPEG'
        ]);
        $path = $request->file('gambar')->getRealPath();
        $data_warga = new dinas();
        $data_warga->email = $request->input('email');
        $data_warga->nama = $request->input('nama');
        $data_warga->subject = $request->input('subject');
        $data_warga->pengaduan = $request->input('pengaduan');
        $data_warga->status = $request->input('status');

        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/data/', $filename);
            $data_warga->gambar = $filename;
            \Mail::to($data_warga->email)->send(new balas);
        }else{
            return $request;
            $data_warga->gambar ='';
        }
        $data_warga->save();
        //natif send notif email
        // \Mail::raw('Sugeng Rawuh '.$data_warga->nama, function ($message) use($data_warga) {
        //     $message->to($data_warga->email, $data_warga->nama);
        //     $message->subject('Laporan anda telah diterima');

        // });
        // mailable email

        // return redirect('/contact',compact('data_warga'))->with('sukses','aa');
        //return redirect('/contact',['data'=>$request])->with('data_warga',$data_warga);
        return redirect('/contact')->with('data_warga',$data_warga)->with('sukses','Laporan Telah Terkirim');
    }

    public function edit($id){
        $list = dinas::find($id);
        $data = DB::select('SELECT COUNT(id) as hasil from dinas');
        // dd($list);
        return view('crud.edit',['list' => $list],['data' => $data]);

    }

    public function delete(Request $request){
        $ids = $request->get('ids');
        $dbs = DB::delete('delete from dinas where id in ('.implode(",",$ids).')');
        return redirect('/pengaduan')->with('dbs',$dbs);
    }
   public function email($id){
        $email = dinas::find($id);
        $upd = DB::update('update dinas set status = "sudah_verifikasi" where dinas.id = ?', [$id]);
       return view('crud.email',['email' => $email]);
   }
}
