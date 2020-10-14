@extends('layouts.master')

@section('wrapper')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Warga</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Warga</li>
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
            <a href="/dashboard_v2" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/list_data_warga" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>
               Data Warga
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kirim_data" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
                Kirim Data Kemiskinan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/export_data" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
                Menerima Data Verifikasi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/kelola_akun" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Kelola Akun
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">DATA SELESAI</span>
            <span class="info-box-number">
              @foreach ($verif as $sudah)
                  {{$sudah->hasil}}
              @endforeach
                {{-- <small>ORANG</small> --}}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">KETERANGAN KOSONG</span>
            <span class="info-box-number">
                @foreach ($veri as $belum)
                    {{$belum->hasil}}
                @endforeach</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">INFO</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <tr>
                                <td width="35%" align="right"></td>
                               <td width="30"><span class="text-muted">INFORMASI VERIFIKASI KETERANGAN DATA WARGA</span></td>
                               <td width="25%" align="left"></td>
                            </tr>
                           </table>
                           <div class="row">
                            <div class="col-md-12">
                  <div class="form-group">
                  <label>Hal Yang Perlu Diperhatikan Untuk Proses Verifikasi Sebagai Berikut :</label>
                    <ol>
                        <li>Harus Terdapat Data Keterangan Kosong Pada Info Box Diatas</li>
                        <li>Tombol Verifikasi Data Keterangan Data Warga Untuk Mengisi Keterangan Warga Yang Kosong Tersebut </li>
                        <li>Proses Verifikasi Dilakukan Oleh Sistem Dengan Kriteria Yang Telah Ditetapkan</li>
                        <li>Hasil Verifikasi Akan Muncul Di Kolom Hasil Rekomendasi</li>
                        <li>Untuk Tombol Persetujuan (Ya) untuk Menyetujui Hasil Rekomendasi,Untuk Tombol Persetujuan (Tidak) merubah Hasil Sebaliknya </li>
                        <li>Tombol Verifikasi Data Keterangan Warga Akan
                            <strong> Menghilang</strong>  Jika Tidak Terdapat Data Keterangan Kosong Atau Nilainya Nol (0)</li>
                        <li>Tombol Verifikasi Data Keterangan Warga Akan <strong> Tampil Kembali</strong> Jika Terdapat Data Keterangan Kosong </li>
                    </ol>
                </div>
                            </div>
                           </div>
                    </div>
                </div>
                   </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Mohon Perhatikan Informasinya
            </div>
            <!-- /.card-footer-->
          </div>
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">List Data Warga</h3> --}}
          @foreach ($dr as $belum)
                    @if ($belum->hasil)
                    <a href="{{url('spk')}}" class="btn btn-primary btn-sm" onclick="return confirm('VERIFIKASI DATA KETERANGAN WARGA YANG KOSONG !!!')">Verifikasi Data Keterangan Warga</a>
                    @else
                    @endif
                @endforeach
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-xl">
                    KRITERIA
                  </button>
          <div class="card-tools">
          <form action="{{url('pencarian')}}" method="GET">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="cari" class="form-control float-right" placeholder="Nama Warga">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </form>
            </div>
          </div>

        </div>
        <!-- /.card-header -->

        <style>
            div.ex1 {

           max-width: 97%;
           height: 490px;
           overflow-x: scroll;

           margin-left: 20px;
           margin-bottom: 10px;
           margin-top: 0px;
           margin-left: 20px;
               }

           .content-table {
           border-collapse: collapse;
           margin: 25px 0;
           font-size: 0.9em;
           min-width: 950px;
           border-radius: 5px 5px 0 0;
           overflow: hidden;
           box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
           }

           .content-table thead tr {
           background-color: #009879;
           color: #ffffff;
           text-align: left;
           font-weight: bold;
           }

           .content-table th,
           .content-table td {
           padding: 12px 15px;
           text-align: center;
           }

           .content-table tbody tr {
           border-bottom: 1px solid #dddddd;
           }

           .content-table tbody tr:nth-of-type(even) {
           background-color: #f3f3f3;
           }

           .content-table tbody tr:last-of-type {
           border-bottom: 2px solid #009879;
           }

           .content-table tbody tr.active-row {
           font-weight: bold;

           color: #009879;
           }


        </style>
        <div class="ex1">
          <table class="content-table">
            <thead>
              <tr>
                <th>NIK</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Keterangan Warga</th>
                <th>Persetujuan</th>
                <th>Hasil Rekomendasi</th>
                <th>Verifikasi Keterangan</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($db as $item)
                <tr>
                <td>{{$item->nik}}</td>
                <td>{{$item->kecamatan}}</td>
                <td>{{$item->desa}}</td>
                <td>{{$item->nama_krt}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->keterangan}}</td>
                <td>
                    @if ($item->verifikasi == 0)
                    <a href="/btn_ya/{{$item->id}}/edit_ya" class="btn btn-block btn-success btn-sm" hidden>YA</a>
                    <a href="/btn_tidak/{{$item->id}}/edit_tidak" class="btn btn-block btn-danger btn-sm" hidden>TIDAK</a>
                    @elseif($item->verifikasi == 1)
                    <a href="/btn_ya/{{$item->id}}/edit_ya" class="btn btn-block btn-success btn-sm">YA</a>
                    <a href="/btn_tidak/{{$item->id}}/edit_tidak" class="btn btn-block btn-danger btn-sm">TIDAK</a>
                    @endif
                </td>
                <td>
                    @if ($item->saran == "mampu" )
                    {{-- <span class="label label-success">VERIFIKASI</span> --}}
                    <span class="badge badge-info">MAMPU</span>
                    @elseif($item->saran == "tidak_mampu")
                    {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                    <span class="badge badge-warning">TIDAK MAMPU</span>
                @endif
                </td>
                <td>@if ($item->keterangan == "mampu" || $item->keterangan =="tidak_mampu" )
                    {{-- <span class="label label-success">VERIFIKASI</span> --}}
                    <span class="badge badge-success">KETERANGAN SUDAH ADA</span>
                    @elseif($item->keterangan == "" || $item->keterangan == "-")
                    {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                    <span class="badge badge-danger">KETERANGAN MASIH KOSONG</span>
                @endif</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection

@section('footer')

<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Kriteria Yang Digunakan Pada Sistem Untuk Pengambilan Keputusan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                  <div class="form-group">
                  <label>INFORMASI DATA WARGA</label>
                    <ol>
                        <li>Jumlah Anggota Rumah Tangga</li>
                        <li>Jumlah Keluarga</li>
                    </ol>
                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                  <label>KETERANGAN RUMAH</label>
                    <ol>
                        <li>Status Bangunan</li>
                        <li>Status Lahan</li>
                        <li>Lantai</li>
                        <li>Dinding</li>
                        <li>Kondisi Dinding</li>
                        <li>Atap</li>
                        <li>Kondisi Atap</li>
                        <li>Jumlah Kamar</li>
                        <li>Sumber Air Minum</li>
                        <li>Cara Peroleh Air</li>
                        <li>Sumber Penerangan</li>
                        <li>Daya Listrik</li>
                        <li>Bahan Bakar Masak</li>
                        <li>Status Sanitasi BAB</li>
                        <li>Jenis Kloset</li>
                        <li>Tempat Pembuangan Akhir Tinja</li>
                    </ol>
                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                  <label>KEPEMILIKAN ASET</label>
                    <ol>
                        <li>Ada Tabung Gas</li>
                        <li>Ada Laptop</li>
                        <li>Ada Lemari Es</li>
                        <li>Ada Sepeda</li>
                        <li>Ada AC</li>
                        <li>Ada Motor</li>
                        <li>Ada Pemanas</li>
                        <li>Ada Mobil</li>
                        <li>Ada Telephon</li>
                        <li>Ada Perahu</li>
                        <li>Ada TV</li>
                        <li>Ada Motor Tempel</li>
                        <li>Ada Emas</li>
                        <li>Ada Perahu Motor</li>
                        <li>Ada Kapal</li>
                        <li>Aset Tak Bergerak</li>
                        <li>Rumah Lain</li>
                        <li>Jumlah Sapi</li>
                        <li>Jumlah Babi</li>
                        <li>Jumlah Kerbau</li>
                        <li>Jumlah Kuda</li>
                    </ol>
                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                           <div class="row">
                               <div class="col-md-4">

                               </div>
                               <div class="col-md-4">
                                 <div class="form-group">
                  <label>KEIKUTSERTAAN PROGRAM</label>
                    <ol>
                        <li>Status Kartu Keluarga Sejahtera</li>
                        <li>Status Jaminan Sosial Tenaga Kerja</li>
                        <li>STATUS Kartu Indonesia Pintar</li>
                        <li>Status Asuransi</li>
                        <li>Status Kartu Indonesia Sehat</li>
                        <li>Status Program Keluarga Harapan</li>
                        <li>Status Bpjs Mandiri</li>
                        <li>Status Beras Sejahtera</li>
                        <li>Status Kredit Usaha Rakyat</li>
                    </ol>
                </div>
                               </div>
                               <div class="col-md-4">

                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection
