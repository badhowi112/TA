@extends('layouts.master')

@section('wrapper')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Import Data Warga Baru</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Data Warga</a></li>
            <li class="breadcrumb-item active">Import Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
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
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            @if (auth()->user()->desa =='DRINGU')
            <a href="/data_warga_1" class="nav-link active">
                @elseif(auth()->user()->desa =='KEDUNGDALEM')
                <a href="/data_warga_2" class="nav-link active">
                @elseif(auth()->user()->desa =='KALISALAM')
                <a href="/data_warga_3" class="nav-link active">
                @elseif(auth()->user()->desa =='PABEAN')
                <a href="/data_warga_4" class="nav-link active">
                @elseif(auth()->user()->desa =='TAMANSARI')
                <a href="/data_warga_5" class="nav-link active">
                @elseif(auth()->user()->desa =='MRANGGON_LAWANG')
                <a href="/data_warga_6" class="nav-link active">
                @elseif(auth()->user()->desa =='RANDUPUTIH')
                <a href="/data_warga_7" class="nav-link active">
                @elseif(auth()->user()->desa =='SUMBERAGUNG')
                <a href="/data_warga_8" class="nav-link active">
                @elseif(auth()->user()->desa =='SUMBERSUKO')
                <a href="/data_warga_9" class="nav-link active">
                @elseif(auth()->user()->desa =='NGEPOH')
                <a href="/data_warga_10" class="nav-link active">
                @elseif(auth()->user()->desa =='WATUWUNGKUK')
                <a href="/data_warga_11" class="nav-link active">
                @elseif(auth()->user()->desa =='SEKARKARE')
                <a href="/data_warga_12" class="nav-link active">
                @elseif(auth()->user()->desa =='TEGALREJO')
                <a href="/data_warga_13" class="nav-link active">
                @elseif(auth()->user()->desa =='KALIREJO')
                <a href="/data_warga_14" class="nav-link active">
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
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Import Data Warga</h3>
      @if ($message = Session::get('Sukses'))
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{$message}}</strong>
      </div>
  @endif
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

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ url('/import_dringu') }}">
            {{ csrf_field() }}
            <div class="form-group">
             <table class="table">
              <tr>
               <td width="40%" align="right"><label>Pilih File Yang Akan DiUpload </label></td>
               <td width="30">
                <input type="file" name="select_file" />
               </td>
               <td width="30%" align="left">
                <input type="submit" name="upload" class="btn btn-primary" value="Upload">
               </td>
              </tr>
              <tr>
               <td width="40%" align="right"></td>
               <td width="30"><span class="text-muted">Extensi File Harus Berupa .xls, .xslx</span></td>
               <td width="30%" align="left"></td>
              </tr>
             </table>
            </div>
           </form>

    </div>

    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
  </div>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Template File Excel</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            <img src="{{asset('gambar/excel.png')}}" style="width: 100%; height: 100% " alt="excel">
            <a href="/download" class="btn btn-block btn-primary btn-sm">Download</a>

            </div>
            <div class="col-md-4">
            </div>
        </div>

    </div>
</div>
<br />
<br />
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <tr>
                <td width="35%" align="right"></td>
               <td width="30"><span class="text-muted">INFORMASI KODE UNTUK INPUTAN DI EXCEL</span></td>
               <td width="25%" align="left"></td>
            </tr>
            {{-- <tr>
                <td width="35 %" align="right"></td>
               <td width="30"><span class="badge badge-info">GUNAKAN CTRL+F UNTUK PENCARIAN CEPAT</span></td>
               <td width="25%" align="left"></td>
            </tr> --}}
        </table>
        <div class="row">
            <div class="col-md-4">
                {{-- pertama --}}
                <div class="form-group">
                  <label>STA BANGUNAN (Status Bangunan)</label>
                    <ol>
                        <li>Milik Sendiri</li>
                        <li>Kontrak/Sewa</li>
                        <li>Bebas Sewa</li>
                        <li>Dinas</li>
                        <li>Lainnya</li>
                    </ol>
                </div>
                <div class="form-group">
                    <label>STA LAHAN (Status Lahan)</label>
                    <ol>
                        <li>Milik Sendiri</li>
                        <li>Milik orang lain</li>
                        <li>Tanah Negara</li>
                        <li>Lainnya</li>
                    </ol>
                </div>
                <div class="form-group">
                    <label>LANTAI</label>
                    <ol>
                        <li>Marmer/Granit</li>
                        <li>Keramik</li>
                        <li>Parket/Vinil/Permadani</li>
                        <li>Ubin/Tegel/Teraso</li>
                        <li>Kayu/Papan Kualitas tinggi</li>
                        <li>Bambu</li>
                        <li>Kayu/Papan Kualitas Rendah</li>
                        <li>Tanah</li>
                        <li>Lainnya</li>
                    </ol>
                </div>
                <div class="form-group">
                    <label>SUMBER PENERANGAN</label>
                    <ol>
                       <li>Listrik PLN</li>
                       <li>Listrik Non PLN</li>
                       <li>Bukan Listrik</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS SANITASI BAB</label>
                    <ol>
                        <li>Sendiri</li>
                        <li>Bersama</li>
                        <li>Umum</li>
                        <li>Tidak Ada</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA TABUNG GAS</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA SEPEDA</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA PEMANAS</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA PERAHU</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA EMAS</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ASET TAK BERGERAK</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS JAMINAN SOSIAL TENAGA KERJA</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS KARTU INDONESIA SEHAT</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS BERAS SEJAHTERA</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
            </div>
            <div class="col-md-4">
                {{-- kedua --}}
                <div class="form-group">
                    <label>DINDING</label>
                    <ol>
                        <li>Tembok</li>
                        <li>Plesteran anyaman bambu/Kawat</li>
                        <li>Kayu</li>
                        <li>Anyaman Bambu</li>
                        <li>Batang Kayu</li>
                        <li>Bambu</li>
                        <li>Lainnya</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ATAP</label>
                    <ol>
                        <li>Beton/Genteng Beton</li>
                        <li>Genteng Keramik</li>
                        <li>Genteng Metal</li>
                        <li>Genteng Tanah Liat</li>
                        <li>Asbes</li>
                        <li>Seng</li>
                        <li>Sirap</li>
                        <li>Bambu</li>
                        <li>Jeramih/Ijuk/Daun-daunan</li>
                        <li>Lainnya</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>KONDISI ATAP</label>
                    <ol>
                        <li>Bagus/Kualitas Tinggi</li>
                        <li>Jelek/Kualitas Rendah</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>DAYA LISTRIK</label>
                    <ol>
                        <li>450 WATT</li>
                        <li>900 WATT</li>
                        <li>1.300 WATT</li>
                        <li>2.200 WATT</li>
                        <li>>2.200 WATT</li>
                        <li>Tanpa Meteran</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>JENIS KLOSET</label>
                    <ol>
                        <li>Leher Angsa</li>
                        <li>Plengsengan</li>
                        <li>Cemplung/Cubluk</li>
                        <li>Tidak Ada</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA LAPTOP</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA AC</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA MOBIL</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA TV</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA PERAHU MOTOR</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>RUMAH LAIN</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS KARTU INDONESIA PINTAR</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS PROGRAM KELUARGA HARAPAN</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS KREDIT USAHA RAKYAT</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
            </div>
            <div class="col-md-4">
                {{-- ketiga --}}
                <div class="form-group">
                    <label>KONDISI DINDING</label>
                    <ol>
                        <li>Bagus/Kualitas Tinggi</li>
                        <li>Jelek/Kualitas Rendah</li>
                    </ol>
                  </div>
                <div class="form-group">
                    <label>SUMBER AIR MINUM</label>
                    <ol>
                        <li>Air Kemasan Bermerek</li>
                        <li>Air Isi Ulang</li>
                        <li>Leding Meteran</li>
                        <li>Leding Eceran</li>
                        <li>Sumur Bor/Pompa</li>
                        <li>Sumur Terlindung</li>
                        <li>Sumur Tak Terlindung</li>
                        <li>Mata Air Terlindung</li>
                        <li>Mata Air Tak Terlindung</li>
                        <li>Air sungai/Danau/Waduk</li>
                        <li>Air Hujan</li>
                        <li>Lainnya</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>CARA PEROLEH AIR MINUM</label>
                    <ol>
                        <li>Membeli Eceran</li>
                        <li>Langganan</li>
                        <li>Tidak Membeli</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>SUMBER ENERGI MASAK</label>
                    <ol>
                        <li>Listrik</li>
                        <li>Gas >3kg</li>
                        <li>Gas 3kg</li>
                        <li>Gas kota/Biogas</li>
                        <li>Minyak Tanah</li>
                        <li>Briket</li>
                        <li>Arang</li>
                        <li>Kayu Bakar</li>
                        <li>Tidak Memasak Di rumah</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>TEMPAT PEMBUANGAN AKHIR TINJA</label>
                    <ol>
                       <li>Tangki</li>
                       <li>SPAL</li>
                       <li>Lubang Tanah</li>
                       <li>Kolah/Sawah/Sungai/Danah/Laut</li>
                       <li>Pantai/Tanah Lapang/Kebun</li>
                       <li>Lainnya</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA LEMARI ES</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA MOTOR</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA TELEPHON</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA MOTOR TEMPEL</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>ADA KAPAL</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS KARTU KELUARGA SEJAHTERA</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS ASURANSI</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
                  <div class="form-group">
                    <label>STATUS BPJS MANDIRI</label>
                    <ol>
                        <li>Ya</li>
                        <li>Tidak</li>
                    </ol>
                  </div>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <tr>
                <td width="35%" align="right"></td>
               <td width="30"><span class="text-muted">INFORMASI LANJUTAN UNTUK INPUTAN DI EXCEL</span></td>
               <td width="25%" align="left"></td>
            </tr>
        </table>
    <div class="row">
        <div class="col-md-4">
            {{-- pertama --}}
            <div class="form-group">
                <label>NIK</label>
                <ul>
                    <li>Inputan Berupa Angka</li>
                </ul>
              </div>
            <div class="form-group">
                <label>ALAMAT</label>
                <ul>
                    <li>Inputan Berupa Teks</li>
                </ul>
              </div>
              <div class="form-group">
                <label>JUMLAH KAMAR</label>
                <ul>
                    <li>Inputan Berupa Angka</li>
                </ul>
              </div>
              <div class="form-group">
                <label>ID NOMOR PLN</label>
                <ul>
                    <li>Inputan Berupa Angka</li>
                </ul>
              </div>
              <div class="form-group">
                <label>JUMLAH BABI</label>
                <ul>
                    <li>Inputan Berupa Angka,jika tidak ada di isi 0</li>
                </ul>
            </div>
            <div class="form-group">
                <label>JUMLAH KUDA</label>
                <ul>
                    <li>Inputan Berupa Angka,jika tidak ada di isi 0</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            {{-- kedua --}}
            <div class="form-group">
                <label>NAMA KEPALA RUMAH TANGGA ( Nama Krt )</label>
                <ul>
                    <li>Inputan Berupa Teks</li>
                </ul>
              </div>
            <div class="form-group">
                <label>JUMLAH ANGGOTA RUMAH TANGGA ( Jumlah Art )</label>
                <ul>
                    <li>Inputan Berupa Teks</li>
                </ul>
              </div>
              <div class="form-group">
                <label>SUMBER AIR MINUM</label>
                <ul>
                    <li>Inputan Berupa Angka</li>
                </ul>
            </div>
              <div class="form-group">
                <label>ID NOMOR GAS</label>
                <ul>
                    <li>Inputan Berupa Angka,jika tidak ada di isi 0</li>
                </ul>
            </div>
            <div class="form-group">
                <label>JUMLAH KERBAU</label>
                <ul>
                    <li>Inputan Berupa Angka,jika tidak ada di isi 0</li>
                </ul>
            </div>
            </div>
            <div class="col-md-4">
                {{-- ketiga --}}
            <div class="form-group">
                <label>JUMLAH KELUARGA</label>
                <ul>
                    <li>Inputan Berupa Angka</li>
                </ul>
            </div>
            <div class="form-group">
                <label>LUAS LANTAI</label>
                <ul>
                    <li>Inputan Berupa Angka</li>
                </ul>
            </div>
            <div class="form-group">
                <label>ID PELANGGAN PDAM ( Nomor Meter Air )</label>
                <ul>
                    <li>Inputan Berupa Angka,jika tidak ada di isi 0</li>
                </ul>
            </div>
            <div class="form-group">
                <label>JUMLAH SAPI</label>
                <ul>
                    <li>Inputan Berupa Angka,jika tidak ada di isi 0</li>
                </ul>
            </div>
            <div class="form-group">
                <label>JUMLAH KAMBING</label>
                <ul>
                    <li>Inputan Berupa Angka,jika tidak ada di isi 0</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
  </div>
@endsection
