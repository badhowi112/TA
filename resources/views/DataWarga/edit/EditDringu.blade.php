@extends('layouts.master')

@section('wrapper')
   <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Update Data Warga </h1>
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
                    <form action="/data_warga/{{$warga->id}}/update/dringu" method="POST">
                          @csrf
                       {{-- NIK --}}
                      <div class="form-group">
                          <label >NIK</label>
                      <input value="{{$warga->nik}}" id="nik" name="nik" type="number" class="form-control" id="" @if ($errors->has('nik')) autofocus @endif>
                          {{-- <div class="alert alert-danger">

                          </div> --}}
                      </div>
                      {{-- Kecamatan --}}
                      <div class="form-group">
                          <label>Kecamatan</label>
                          <select name="kecamatan" class="form-control">
                            
                          <option value="Dringu" selected>DRINGU</option>
                          </select>
                      </div>
                      {{-- Desa --}}
                      <div class="form-group">
                          <label>Desa</label>
                          <select  name="desa" class="form-control">
                            
                          <option value="DRINGU" @if ($warga->desa =='DRINGU' || $warga->desa =='Dringu' )
                            selected
                        @endif >Dringu</option>
                        <option value="KEDUNGDALEM" @if ($warga->desa =='KEDUNGDALEM')
                            selected
                        @endif >Kedungdalem</option>
                        <option value="KALISALAM" @if ($warga->desa =='KALISALAM')
                            selected
                        @endif >Kalisalam</option>
                        <option value="PABEAN" @if ($warga->desa =='PABEAN')
                            selected
                        @endif >Pabean</option>
                        <option value="TAMANSARI" @if ($warga->desa =='TAMANSARI')
                            selected
                        @endif >Tamansari</option>
                        <option value="MRANGGON LAWANG" @if ($warga->desa =='MRANGGON LAWANG')
                            selected
                        @endif >Mranggon Lawang</option>
                        <option value="RANDUPUTIH" @if ($warga->desa =='RANDUPUTIH')
                            selected
                        @endif >Randuputih</option>
                        <option value="SUMBERAGUNG" @if ($warga->desa =='SUMBERAGUNG')
                            selected
                        @endif >Sumberagung</option>
                        <option value="SUMBERSUKO" @if ($warga->desa =='SUMBERSUKO')
                            selected
                        @endif >Sumbersuko</option>
                        <option value="NGEPOH" @if ($warga->desa =='NGEPOH')
                            selected
                        @endif >Ngepoh</option>
                        <option value="WATUWUNGKUK" @if ($warga->desa =='WATUWUNGKUK')
                            selected
                        @endif >Watuwungkuk</option>
                        <option value="SEKARKARE" @if ($warga->desa =='SEKARKARE')
                            selected
                        @endif >Sekarkare</option>
                        <option value="TEGALREJO" @if ($warga->desa =='TEGALREJO')
                            selected
                        @endif >Tegalrejo</option>
                        <option value="KALIREJO" @if ($warga->desa =='KALIREJO')
                            selected
                        @endif >Kalirejo</option>
                          </select>
                      </div>
                      {{-- Nama KRT --}}
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nama Kepala Rumah Tangga</label>
                      <input value="{{$warga->nama_krt}}"  name="nama_krt" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                   </div>
                   <div class="col-md-6">
                       {{-- alamat --}}
                      <div class="form-group">
                          <label>Alamat</label>
                          <textarea  name="alamat" class="form-control" rows="3" placeholder="">{{$warga->alamat}}</textarea>
                      </div>
                      {{-- Jumlah ART--}}
                      <div class="form-group">
                          <label for="exampleInputEmail1">Jumlah Anggota Rumah Tangga</label>
                          <input value="{{$warga->jumlah_art}}"  name="jumlah_art" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      {{-- JUMLAH_KELUARGA --}}
                      <div class="form-group">
                          <label for="exampleInputEmail1">Jumlah Keluarga</label>
                          <input value="{{$warga->jumlah_keluarga}}"  name="jumlah_keluarga" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
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
                                
                              <option value="1" @if ($warga->sta_bangunan == 1)
                                selected
                            @endif>Milik Sendiri</option>
                         <option value="2" @if ($warga->sta_bangunan == 2)
                                selected
                            @endif>Kontrak/Sewa</option>
                         <option value="3" @if ($warga->sta_bangunan == 3)
                                selected
                            @endif>Bebas Sewa</option>
                         <option value="4" @if ($warga->sta_bangunan == 4)
                                selected
                            @endif>Dinas</option>
                         <option value="5" @if ($warga->sta_bangunan == 5)
                                selected
                            @endif>Lainnya</option>
                        </select>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Status Lahan</label>
                          <select  name="sta_lahan" class="form-control">
                                
                              <option value="1" @if ($warga->sta_lahan == 1)
                                selected
                            @endif>Milik Sendiri</option>
                         <option value="2" @if ($warga->sta_lahan == 2)
                                selected
                            @endif>Milik orang lain</option>
                         <option value="3" @if ($warga->sta_lahan == 3)
                                selected
                            @endif>Tanah Negara</option>
                         <option value="4" @if ($warga->sta_lahan == 4)
                                selected
                            @endif>Lainnya</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Luas Lantai</label>
                          <input value="{{$warga->luas_lantai}}"  name="luas_lantai" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Lantai</label>
                          <select  name="lantai" class="form-control">
                                
                              <option value="1" @if ($warga->lantai == 1)
                                selected
                               @endif>Marmer/Granit</option>
                               <option value="2" @if ($warga->lantai == 2)
                              selected
                              @endif>Keramik</option>
                              <option value="3" @if ($warga->lantai == 3)
                             selected
                              @endif>Parket/Vinil/Permadani</option>
                             <option value="4" @if ($warga->lantai == 4)
                             selected
                              @endif>Ubin/Tegel/Teraso</option>
                              <option value="5" @if ($warga->lantai == 5)
                             selected
                             @endif>Kayu/Papan Kualitas tinggi</option>
                              <option value="6" @if ($warga->lantai == 6)
                               selected
                             @endif>Bambu</option>
                            <option value="7" @if ($warga->lantai == 7)
                           selected
                            @endif>Kayu/Papan Kualitas Rendah</option>
                           <option value="8" @if ($warga->lantai == 8)
                           selected
                            @endif>Tanah</option>
                            <option value="9" @if ($warga->lantai == 9)
                        selected
                         @endif>Lainnya</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Dinding</label>
                          <select  name="dinding" class="form-control">
                                
                              <option value="1" @if ($warga->dinding == 1)
                                selected
                              @endif>Tembok</option>
                        <option value="2" @if ($warga->dinding == 2)selected
                            @endif>Plesteran anyaman bambu/Kawat</option>
                          <option value="3" @if ($warga->dinding == 3)selected
                        @endif>Kayu</option>
                      <option value="4" @if ($warga->dinding == 4)
                       selected
                      @endif>Anyaman Bambu</option>
                      <option value="5" @if ($warga->dinding == 5)
                     selected
                    @endif>Batang Kayu</option>
                      <option value="6" @if ($warga->dinding == 6)
                     selected
                     @endif>Bambu</option>
                    <option value="7" @if ($warga->dinding == 7)
                     selected
                    @endif>Lainnya</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Kondisi Dinding</label>
                          <select  name="kondisi_dinding" class="form-control">
                                
                              <option value="1" @if ($warga->kondisi_dinding == 1)
                                selected
                                @endif>Bagus/Kualitas Tinggi</option>
                                <option value="2" @if ($warga->kondisi_dinding == 2)
                                selected
                                @endif>Jelek/Kualitas Rendah</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Atap</label>
                          <select  name="atap" class="form-control">
                            <option value="1" @if ($warga->atap == 1)
                                selected
                                @endif>Beton/Genteng Beton</option>
                                <option value="2" @if ($warga->atap == 2)
                                selected                                              @endif>Genteng Keramik</option>
                                <option value="3" @if ($warga->atap == 3)
                                selected
                                @endif>Genteng Metal</option>
                                <option value="4" @if ($warga->atap == 4)
                                selected
                                @endif>Genteng Tanah Liat</option>
                                <option value="5" @if ($warga->atap == 5)
                                selected
                                @endif>Asbes</option>
                                <option value="6" @if ($warga->atap == 6)
                                selected
                                @endif>Seng</option>
                                <option value="7" @if ($warga->atap == 7)
                                selected
                                @endif>Sirap</option>
                                <option value="8" @if ($warga->atap == 8)
                                selected
                                @endif>Bambu</option>
                                <option value="9" @if ($warga->atap == 9)
                                selected
                                @endif>Jeramih/Ijuk/Daun-daunan</option>
                                <option value="10" @if ($warga->atap == 10)
                                selected
                                @endif>Lainnya</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Kondisi Atap</label>
                          <select  name="kondisi_atap" class="form-control">
                                
                              <option value="1" @if ($warga->kondisi_atap == 1)
                                selected
                                @endif>Bagus/Kualitas Tinggi</option>
                                <option value="2" @if ($warga->kondisi_atap == 2)
                                selected
                                @endif>Jelek/Kualitas Rendah</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label >Jumlah Kamar</label>
                          <input value="{{$warga->jumlah_kamar}}"  name="jumlah_kamar" type="number" class="form-control" >
                      </div>
                      <div class="form-group">
                          <label>Sumber Air Minum</label>
                          <select  name="sumber_airminum" class="form-control">
                            <option value="1" @if ($warga->sumber_airminum == 1)
                                selected
                                @endif>Air Kemasan Bermerek</option>
                                <option value="2" @if ($warga->sumber_airminum == 2)
                                selected
                                @endif>Air Isi Ulang</option>
                                <option value="3" @if ($warga->sumber_airminum == 3)
                                selected
                                @endif>Leding Meteran </option>
                                <option value="4" @if ($warga->sumber_airminum == 4)
                                selected
                                @endif>Leding Eceran </option>
                                <option value="5" @if ($warga->sumber_airminum == 5)
                                selected
                                @endif>Sumur Bor/Pompa</option>
                                <option value="6" @if ($warga->sumber_airminum == 6)
                                selected
                                @endif>Sumur Terlindung</option>
                                <option value="7" @if ($warga->sumber_airminum == 7)
                                selected
                                @endif>Sumur Tak Terlindung</option>
                                <option value="8" @if ($warga->sumber_airminum == 8)
                                selected
                                @endif>Mata Air Terlindung</option>
                                <option value="9" @if ($warga->sumber_airminum == 9)
                                selected
                                @endif>Mata Air Tak Terlindung</option>
                                <option value="10" @if ($warga->sumber_airminum == 10)
                                selected
                                @endif>Air sungai/Danau/Waduk </option>
                                <option value="11" @if ($warga->sumber_airminum == 11)
                                selected
                                @endif>Air Hujan</option>
                                <option value="12" @if ($warga->sumber_airminum == 12)
                                selected
                                @endif>Lainnya</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">ID Pelanggan PDAM</label>
                          <input value="{{$warga->nomor_meter_air}}" name="nomor_meter_air" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Cara Peroleh Air Minum</label>
                          <select  name="cara_peroleh_airminum" class="form-control">
                                
                              <option value="1" @if ($warga->cara_peroleh_airminum == 1)
                                selected
                                @endif>Membeli Eceran</option>
                               <option value="2" @if ($warga->cara_peroleh_airminum == 2)
                               selected
                                @endif>Langganan</option>
                               <option value="3" @if ($warga->cara_peroleh_airminum == 3)
                               selected
                               @endif>Tidak Membeli</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Sumber Penerangan</label>
                          <select  name="sumber_penerangan" class="form-control">
                                
                              <option value="1" @if ($warga->sumber_penerangan == 1)
                                selected
                                @endif>Listrik PLN</option>
                                <option value="2" @if ($warga->sumber_penerangan == 2)
                                selected
                                @endif>Listrik Non PLN</option>
                                <option value="3" @if ($warga->sumber_penerangan == 3)
                                selected
                                @endif>Bukan Listrik</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Daya Listrik</label>
                          <select  name="daya" class="form-control">
                                
                              <option value="1" @if ($warga->daya == 1)
                                selected
                                @endif>450 WATT</option>
                                <option value="2" @if ($warga->daya == 2)
                                selected
                                @endif>900 WATT</option>
                                <option value="3" @if ($warga->daya == 3)
                                selected
                                @endif>1.300 WATT</option>
                                <option value="4" @if ($warga->daya == 4)
                                selected
                                @endif>2.200 WATT</option>
                                <option value="5" @if ($warga->daya == 5)
                                selected
                                @endif>>2.200 WATT</option>
                                <option value="6" @if ($warga->daya == 6)
                                selected
                                @endif>Tanpa Meteran</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">ID Pelanggan PLN</label>
                          <input value="{{$warga->nomor_pln}}" name="nomor_pln" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Sumber Energi Masak</label>
                          <select  name="bb_masak" class="form-control">
                                
                              <option value="1" @if ($warga->bb_masak == 1)
                                selected
                                @endif>Listrik</option>
                                <option value="2" @if ($warga->bb_masak == 2)
                                selected
                                @endif>Gas >3kg</option>
                                <option value="3" @if ($warga->bb_masak == 3)
                                selected
                                @endif>Gas 3kg </option>
                                <option value="4" @if ($warga->bb_masak == 4)
                                selected
                                @endif>Gas kota/Biogas</option>
                                <option value="5" @if ($warga->bb_masak == 5)
                                selected
                                @endif>Minyak Tanah</option>
                                <option value="6" @if ($warga->bb_masak == 6)
                                selected
                                @endif>Briket</option>
                                <option value="7" @if ($warga->bb_masak == 7)
                                selected
                                @endif>Arang</option>
                                <option value="8" @if ($warga->bb_masak == 8)
                                selected
                                @endif>Kayu Bakar</option>
                                <option value="9" @if ($warga->bb_masak == 9)
                                selected
                                @endif>Tidak Memasak Di rumah</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">ID Pelanggan Gas</label>
                          <input value="{{$warga->nomor_gas}}"  name="nomor_gas" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Status Sanitasi BAB</label>
                          <select  name="fasbab" class="form-control">
                                
                              <option value="1" @if ($warga->fasbab == 1)
                                selected
                                @endif>Sendiri</option>
                                <option value="2" @if ($warga->fasbab == 2)
                                selected
                                @endif>Bersama</option>
                                <option value="3" @if ($warga->fasbab == 3)
                                selected
                                @endif>Umum</option>
                                <option value="4" @if ($warga->fasbab == 4)
                                selected
                                @endif>Tidak Ada</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Jenis Kloset</label>
                          <select  name="kloset" class="form-control">
                                
                              <option value="1" @if ($warga->kloset == 1)
                                selected
                                @endif>Leher Angsa</option>
                                <option value="2" @if ($warga->kloset == 2)
                                selected
                                @endif>Plengsengan</option>
                                <option value="3" @if ($warga->kloset == 3)
                                selected
                                @endif>Cemplung/Cubluk</option>
                                <option value="4" @if ($warga->kloset == 4)
                                selected
                                @endif>Tidak Ada</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Tempat Pembuangan Akhir Tinja</label>
                          <select  name="buang_tinja" class="form-control">
                            <option value="1" @if ($warga->buang_tinja == 1)
                                selected
                                @endif>Tangki</option>
                                <option value="2" @if ($warga->buang_tinja == 2)
                                selected
                                @endif>SPAL</option>
                                <option value="3" @if ($warga->buang_tinja == 3)
                                selected
                                @endif>Lubang Tanah</option>
                                <option value="4" @if ($warga->buang_tinja == 4)
                                selected
                                @endif>Kolah/Sawah/Sungai/Danah/Laut</option>
                                <option value="5" @if ($warga->buang_tinja == 5)
                                selected
                                @endif>Pantai/Tanah Lapang/Kebun</option>
                                <option value="6" @if ($warga->buang_tinja == 6)
                                selected
                                @endif>Lainnya</option>
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
                                
                              <option value="1" @if($warga->ada_tabung_gas == 1)
                                selected @endif>Ya</option>
                              <option value="2" @if($warga->ada_tabung_gas == 2)
                                selected @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Laptop</label>
                          <select  name="ada_laptop" class="form-control">
                                
                              <option value="1" @if ($warga->ada_laptop == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->ada_laptop == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Lemari Es</label>
                          <select  name="ada_lemari_es" class="form-control">
                                
                              <option value="1" @if ($warga->ada_lemari_es == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_lemari_es == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Sepeda</label>
                          <select  name="ada_sepeda" class="form-control">
                                
                              <option value="1" @if ($warga->ada_sepeda == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_sepeda == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada AC</label>
                          <select  name="ada_ac" class="form-control">
                                
                              <option value="1" @if ($warga->ada_ac == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_ac == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Motor</label>
                          <select  name="ada_motor" class="form-control">
                                
                              <option value="1" @if ($warga->ada_motor == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_motor == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Pemanas</label>
                          <select  name="ada_pemanas" class="form-control">
                                
                              <option value="1" @if ($warga->ada_pemanas == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_pemanas == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Mobil</label>
                          <select  name="ada_mobil" class="form-control">
                                
                              <option value="1" @if ($warga->ada_mobil == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_mobil == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Telephon</label>
                          <select  name="ada_telepon" class="form-control">
                                
                              <option value="1" @if ($warga->ada_telepon == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_telepon == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Perahu</label>
                          <select  name="ada_perahu" class="form-control">
                                
                              <option value="1" @if ($warga->ada_perahu == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_perahu == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada TV</label>
                          <select  name="ada_tv" class="form-control">
                                
                              <option value="1" @if ($warga->ada_tv == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_tv == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                          <label>Ada Motor Tempel</label>
                          <select  name="ada_motor_tempel" class="form-control">
                                
                              <option value="1" @if ($warga->ada_motor_tempel == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_motor_tempel == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Emas</label>
                          <select  name="ada_emas" class="form-control">
                                
                              <option value="1" @if ($warga->ada_emas == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_emas == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Perahu Motor</label>
                          <select  name="ada_perahu_motor" class="form-control">
                                
                              <option value="1" @if ($warga->ada_perahu_motor == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_perahu_motor == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Ada Kapal</label>
                          <select  name="ada_kapal" class="form-control">
                                
                              <option value="1" @if ($warga->ada_kapal == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->ada_kapal == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Aset Tak Bergerak</label>
                          <select  name="aset_tak_bergerak" class="form-control">
                                
                              <option value="1" @if ($warga->aset_tak_bergerak == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->aset_tak_bergerak == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Luas Aset Tak Bergerak</label>
                          <input value="{{$warga->luas_atb}}"  name="luas_atb" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Rumah Lain</label>
                          <select  name="rumah_lain" class="form-control">
                                
                              <option value="1" @if ($warga->rumah_lain == 1)
                                selected
                            @endif>Ya</option>
                        <option value="2" @if ($warga->rumah_lain == 2)
                                selected
                            @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Jumlah Sapi</label>
                          <input value="{{$warga->jumlah_sapi}}" name="jumlah_sapi" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Jumlah Babi</label>
                          <input value="{{$warga->jumlah_babi}}" name="jumlah_babi" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Jumlah Kerbau</label>
                          <input value="{{$warga->jumlah_kerbau}}" name="jumlah_kerbau" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Jumlah Kambing</label>
                          <input value="{{$warga->jumlah_kambing}}" name="jumlah_kambing" type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Jumlah Kuda</label>
                          <input value="{{$warga->jumlah_kuda}}" name="jumlah_kuda" type="number" class="form-control" id="exampleInputEmail1" @if ($errors->has('jumlah_kuda')) autofocus @endif>
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
                                
                              <option value="1" @if ($warga->sta_kks == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->sta_kks == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Status Jaminan Sosial Tenaga Kerja</label>
                          <select  name="sta_jamsostek" class="form-control">
                                
                              <option value="1" @if ($warga->sta_jamsostek == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->sta_jamsostek == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Status Kartu Indonesia Pintar</label>
                          <select  name="sta_kip" class="form-control">
                                
                              <option value="1" @if ($warga->sta_kip == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->sta_kip == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Status ASURANSI</label>
                          <select  name="sta_asuransi" class="form-control">
                                
                              <option value="1" @if ($warga->sta_asuransi == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->sta_asuransi == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Status Kartu Indonesia Sehat</label>
                          <select  name="sta_kis" class="form-control">
                                
                              <option value="1" @if ($warga->sta_kis == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->sta_kis == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                          <label>Status Program Keluarga Harapan</label>
                          <select  name="sta_pkh" class="form-control">
                                
                              <option value="1" @if ($warga->sta_pkh == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->sta_pkh == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Status Bpjs Mandiri</label>
                          <select  name="sta_bpjs_mandiri" class="form-control">
                                
                              <option value="1" @if ($warga->sta_bpjs_mandiri == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->sta_bpjs_mandiri == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Status Beras Sejahtera</label>
                          <select  name="sta_rastra" class="form-control">
                                
                              <option value="1" @if ($warga->sta_rastra == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->sta_rastra == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Status Kredit Usaha Rakyat</label>
                          <select  name="sta_kur" class="form-control" >
                                
                              <option value="1" @if ($warga->sta_kur == 1)
                                selected
                                @endif>Ya</option>
                                <option value="2" @if ($warga->sta_kur == 2)
                                selected
                                @endif>Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Keterangan Data Warga</label>
                          <select  name="verifikasi" class="form-control" >
                              
                            <option value="0" @if ($warga->verifikasi == 0)
                                selected
                            @endif>SUDAH VERIFIKASI </option>
                            <option value="1" @if ($warga->verifikasi == 1)
                                selected
                            @endif>BELUM VERIFIKASI </option>
                            <input value="-" name="keterangan" type="text" class="form-control" id="exampleInputEmail1" hidden/>
                        </select>

                      </div>
                      <div class="form-group">
                        <button type="submit" id="click" class="btn btn-primary">Submit</button>
                      </div>
                   </div>
               </div>
            </div>
          </form>
    </div>
    <!-- /.card -->
</div>
</div>
</div>
@endsection

@section('footer')

@endsection
