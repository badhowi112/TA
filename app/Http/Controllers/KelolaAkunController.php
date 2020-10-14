<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;
use \App\User;
class KelolaAkunController extends Controller
{
    //
    public function index(Request $request){
        if($request->has('cari'))
        {
            $Akun = \App\User::where('name','LIKE','%' .$request->cari. '%')->get();

        }else{
            $Akun = 
            DB::select('select id,name,Kecamatan,Desa, DATE_FORMAT(created_at, "%d/%m/%Y") as created_at from users WHERE level = "opdes" 
            ');
            
        }

        return view('KelolaAkun.index',compact('Akun'));
    }
    public function create(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:users,name',
            'username' => 'required|unique:users,username']
            ,[
                'name.required' => 'Nama Tidak Boleh Kosong',
                'name.unique' => 'Nama Sudah Terpakai',
                'username.unique' => 'Username Sudah Terpakai',
                'name.required' => 'Nama Tidak Boleh Kosong'
            ]);
        $akun = new User();
        $akun->name = $request->name;
        $akun->username = $request->username;
        $akun->password = bcrypt($request->password);
        $akun->desa = $request->desa;
        $akun->kecamatan = $request->kecamatan;
        $akun->level = $request->level;
        $akun->save();
        return redirect('/kelola_akun')->with('sukses','Akun Operator Desa Berhasil Ditambahkan');
    }
    public function edit($id){
        $Akun = DB::table('users')->where('id',$id)->get();
        return view('KelolaAkun.edit',compact('Akun'));
    }
    public function delete($id){
        $Akun = \App\User::find($id);
        $Akun->delete();
        return redirect('/kelola_akun')->with('sukses','Data Berhasil DiHapus');
    }

    public function update(Request $request,$id)
    {
        $Akun = DB::table('users')->where('id',$id)->update([
            'name' => $request->name,
            'username'=> $request->username,
            'password' => bcrypt($request->password),
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan
        ]);

        return redirect('/kelola_akun')->with('sukses','Data Berhasil DiUpdate');
    }
   

}
