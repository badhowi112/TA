@extends('layouts.master')

@section('wrapper')
   <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Warga</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Data Warga</a></li>
            <li class="breadcrumb-item active">Tambah Data Warga</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
@endsection

@section('sidebar')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard_v2" class="brand-link">
      <img src="{{asset('adminlte/dist/img/probolinggo1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIINDAKIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard_v3" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            @if (auth()->user()->desa =='DRINGU')
            <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='KEDUNGDALEM')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='KALISALAM')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='PABEAN')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='TAMANSARI')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='MRANGGON LAWANG')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='RANDUPUTIH')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='SUMBERAGUNG')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='SUMBERSUKO')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='NGEPOH')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='WATUWUNGKUK')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='SEKARKARE')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='TEGALREJO')
                <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='KALIREJO')
                <a href="/data_warga_1" class="nav-link active">
            @endif
              <i class="nav-icon fa fa-user"></i>
              <p>
                Data Warga
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="/kelola_akun" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Kelola Akun
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>
                @endif
        <div class="card card-primary card-outline card-outline-tabs">
          <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">IDENTITAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">KETERANGAN PERUMAHAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">KEPEMILIKAN ASET</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">KEIKUTSERTAAN PROGRAM</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
              <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                 <div class="row">
                     <div class="col-md-6">

                     <form action="/add/warga" method="POST">
                            @csrf
                         {{-- NIK --}}
    			        <div class="form-group">
    					    <label >NIK</label>
                            <input value="0" id="nik" name="nik" type="number" class="form-control" id="" @if ($errors->has('nik')) autofocus @endif>
                            {{-- <div class="alert alert-danger">

                            </div> --}}
    					</div>
    					{{-- Kecamatan --}}
    					<div class="form-group">
    						<label>Kecamatan</label>
    						<select  name="kecamatan" class="form-control">
    						  
    						<option value="DRINGU">DRINGU</option>
    						</select>
    					</div>
    					{{-- Desa --}}
    					<div class="form-group">
    						<label>Desa</label>
    						<select  name="desa" class="form-control">
    						  
    						<option value="DRINGU">Dringu</option>
    						<option value="KEDUNGDALEM">Kedungdalem</option>
    						<option value="KALISALAM">Kalisalam</option>
    						<option value="PABEAN">Pabean</option>
    						<option value="TAMANSARI">Tamansari</option>
    						<option value="MRANGGON LAWANG">Mranggon Lawang</option>
    						<option value="RANDUPUTIH">Randuputih</option>
    						<option value="SUMBERAGUNG">Sumberagung</option>
    						<option value="SUMBERSUKO">Sumbersuko</option>
    						<option value="NGEPOH">Ngepoh</option>
    						<option value="WATUWUNGKUK">Watuwungkuk</option>
    						<option value="SEKARKARE">Sekarkare</option>
    						<option value="TEGALREJO">Tegalrejo</option>
    						<option value="KALIREJO">Kalirejo</option>
    						</select>
    					</div>
    					{{-- Nama KRT --}}
    					<div class="form-group">
    						<label for="exampleInputEmail1">Nama Kepala Rumah Tangga</label>
    						<input placeholder="Inputan Berupa Teks"  name="nama_krt" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
    					</div>
                     </div>
                     <div class="col-md-6">
                         {{-- alamat --}}
    					<div class="form-group">
    						<label>Alamat</label>
    						<textarea placeholder="Masukkan Alamat" name="alamat" class="form-control" rows="3" placeholder=""></textarea>
    					</div>
    					{{-- Jumlah ART--}}
    					<div class="form-group">
    						<label for="exampleInputEmail1">Jumlah Anggota Rumah Tangga</label>
    						<input value="0"  name="jumlah_art" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
    					</div>
    					{{-- JUMLAH_KELUARGA --}}
    					<div class="form-group">
    						<label for="exampleInputEmail1">Jumlah Keluarga</label>
    						<input value="0"  name="jumlah_keluarga" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
    					</div>
                     </div>
                 </div>
              </div>
              <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status Bangunan</label>
                            <select  name="sta_bangunan" class="form-control">
                                  
                                <option value="1">Milik Sendiri</option>
                                <option value="2">Kontrak/Sewa</option>
                                <option value="3">Bebas Sewa</option>
                                <option value="4">Dinas</option>
                                <option value="5">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Lahan</label>
                            <select  name="sta_lahan" class="form-control">
                                  
                                <option value="1">Milik Sendiri</option>
                                <option value="2">Milik orang lain</option>
                                <option value="3">Tanah Negara</option>
                                <option value="4">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Luas Lantai</label>
                            <input value="0"  name="luas_lantai" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Lantai</label>
                            <select  name="lantai" class="form-control">
                                  
                                <option value="1">Marmer/Granit</option>
                                <option value="2">Keramik</option>
                                <option value="3">Parket/Vinil/Permadani</option>
                                <option value="4">Ubin/Tegel/Teraso</option>
                                <option value="5">Kayu/Papan Kualitas tinggi</option>
                                <option value="6">Bambu</option>
                                <option value="7">Kayu/Papan Kualitas Rendah</option>
                                <option value="8">Tanah</option>
                                <option value="9">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dinding</label>
                            <select  name="dinding" class="form-control">
                                  
                                <option value="1">Tembok</option>
                                <option value="2">Plesteran anyaman bambu/Kawat</option>
                                <option value="3">Kayu</option>
                                <option value="4">Anyaman Bambu</option>
                                <option value="5">Batang Kayu</option>
                                <option value="6">Bambu</option>
                                <option value="7">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kondisi Dinding</label>
                            <select  name="kondisi_dinding" class="form-control">
                                  
                                <option value="1">Bagus/Kualitas Tinggi</option>
                                <option value="2">Jelek/Kualitas Rendah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Atap</label>
                            <select  name="atap" class="form-control">
                                  
                                <option value="1">Beton/Genteng Beton</option>
                                <option value="2">Genteng Keramik</option>
                                <option value="3">Genteng Metal</option>
                                <option value="4">Genteng Tanah Liat</option>
                                <option value="5">Asbes</option>
                                <option value="6">Seng</option>
                                <option value="7">Sirap</option>
                                <option value="8">Bambu</option>
                                <option value="9">Jeramih/Ijuk/Daun-daunan</option>
                                <option value="10">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kondisi Atap</label>
                            <select  name="kondisi_atap" class="form-control">
                                  
                                <option value="1">Bagus/Kualitas Tinggi</option>
                                <option value="2">Jelek/Kualitas Rendah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Kamar</label>
                            <input value="0"  name="jumlah_kamar" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Sumber Air Minum</label>
                            <select  name="sumber_airminum" class="form-control">
                                  
                                <option value="1">Air Kemasan Bermerek</option>
                                <option value="2">Air Isi Ulang</option>
                                <option value="3">Leding Meteran </option>
                                <option value="4">Leding Eceran </option>
                                <option value="5">Sumur Bor/Pompa</option>
                                <option value="6">Sumur Terlindung</option>
                                <option value="7">Sumur Tak Terlindung</option>
                                <option value="8">Mata Air Terlindung</option>
                                <option value="9">Mata Air Tak Terlindung</option>
                                <option value="10">Air sungai/Danau/Waduk </option>
                                <option value="11">Air Hujan</option>
                                <option value="12">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Pelanggan PDAM</label>
                            <input value="0"   name="nomor_meter_air" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Cara Peroleh Air Minum</label>
                            <select  name="cara_peroleh_airminum" class="form-control">
                                  
                                <option value="1">Membeli Eceran</option>
                                <option value="2">Langganan</option>
                                <option value="3">Tidak Membeli</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sumber Penerangan</label>
                            <select  name="sumber_penerangan" class="form-control">
                                  
                                <option value="1">Listrik PLN</option>
                                <option value="2">Listrik Non PLN</option>
                                <option value="3">Bukan Listrik</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Daya Listrik</label>
                            <select  name="daya" class="form-control">
                                  
                                <option value="1">450 WATT</option>
                                <option value="2">900 WATT</option>
                                <option value="3">1.300 WATT</option>
                                <option value="4">2.200 WATT</option>
                                <option value="5">>2.200 WATT</option>
                                <option value="6">Tanpa Meteran</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Nomor PLN</label>
                            <input value="0"  name="nomor_pln" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Sumber Energi Masak</label>
                            <select  name="bb_masak" class="form-control">
                                  
                                <option value="1">Listrik</option>
                                <option value="2">Gas >3kg</option>
                                <option value="3">Gas 3kg </option>
                                <option value="4">Gas kota/Biogas</option>
                                <option value="5">Minyak Tanah</option>
                                <option value="6">Briket</option>
                                <option value="7">Arang</option>
                                <option value="8">Kayu Bakar</option>
                                <option value="9">Tidak Memasak Di rumah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Nomor Gas</label>
                            <input value="0"  name="nomor_gas" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Status Sanitasi BAB</label>
                            <select  name="fasbab" class="form-control">
                                  
                                <option value="1">Sendiri</option>
                                <option value="2">Bersama</option>
                                <option value="3">Umum</option>
                                <option value="4">Tidak Ada</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kloset</label>
                            <select  name="kloset" class="form-control">
                                  
                                <option value="1">Leher Angsa</option>
                                <option value="2">Plengsengan</option>
                                <option value="3">Cemplung/Cubluk</option>
                                <option value="4">Tidak Ada</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tempat Pembuangan Akhir Tinja</label>
                            <select  name="buang_tinja" class="form-control">
                                  
                                <option value="1">Tangki</option>
                                <option value="2">SPAL</option>
                                <option value="3">Lubang Tanah</option>
                                <option value="4">Kolah/Sawah/Sungai/Danah/Laut</option>
                                <option value="5">Pantai/Tanah Lapang/Kebun</option>
                                <option value="6">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                 <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Ada Tabung Gas</label>
                            <select  name="ada_tabung_gas" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Laptop</label>
                            <select  name="ada_laptop" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Lemari Es</label>
                            <select  name="ada_lemari_es" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Sepeda</label>
                            <select  name="ada_sepeda" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada AC</label>
                            <select  name="ada_ac" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Motor</label>
                            <select  name="ada_motor" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Pemanas</label>
                            <select  name="ada_pemanas" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Mobil</label>
                            <select  name="ada_mobil" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Telephon</label>
                            <select  name="ada_telepon" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Perahu</label>
                            <select  name="ada_perahu" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada TV</label>
                            <select  name="ada_tv" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Ada Motor Tempel</label>
                            <select  name="ada_motor_tempel" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Emas</label>
                            <select  name="ada_emas" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Perahu Motor</label>
                            <select  name="ada_perahu_motor" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ada Kapal</label>
                            <select  name="ada_kapal" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Aset Tak Bergerak</label>
                            <select  name="aset_tak_bergerak" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Luas Aset Tak Bergerak</label>
                            <input value="0"  name="luas_atb" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Rumah Lain</label>
                            <select  name="rumah_lain" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Sapi</label>
                            <input value="0"  name="jumlah_sapi" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Babi</label>
                            <input value="0"  name="jumlah_babi" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Kerbau</label>
                            <input value="0"  name="jumlah_kerbau" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Kambing</label>
                            <input value="0"  name="jumlah_kambing" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Kuda</label>
                            <input value="0"  name="jumlah_kuda" type="number" class="form-control" id="exampleInputEmail1" @if ($errors->has('jumlah_kuda')) autofocus @endif>
                        </div>
                     </div>
                 </div>
              </div>
              <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                 <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Status Kartu Keluarga Sejahtera</label>
                            <select  name="sta_kks" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Jaminan Sosial Tenaga Kerja</label>
                            <select  name="sta_jamsostek" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Kartu Indonesia Pintar</label>
                            <select  name="sta_kip" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status ASURANSI</label>
                            <select  name="sta_asuransi" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Kartu Indonesia Sehat</label>
                            <select  name="sta_kis" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Status Program Keluarga Harapan</label>
                            <select  name="sta_pkh" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Bpjs Mandiri</label>
                            <select  name="sta_bpjs_mandiri" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Beras Sejahtera</label>
                            <select  name="sta_rastra" class="form-control">
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Kredit Usaha Rakyat</label>
                            <select  name="sta_kur" class="form-control" >
                                  
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            {{-- <label>KETERANGAN</label> --}}
                            <input  value="" name="keterangan" class="form-control" type="hidden"/>
                            <input  value="0" name="verifikasi" class="form-control" type="hidden"/>
                        </div>
                        <div class="form-group">
                          <button type="submit" id="click" class="btn btn-primary">Simpan</button>
                        </div>
                     </div>
                 </div>
              </div>
            </form>
            </div>
          </div>
          <!-- /.card -->
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection
