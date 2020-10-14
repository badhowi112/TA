@extends('layouts.master')

@section('wrapper')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            @if (auth()->user()->desa=='DRINGU')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Dringu </h1>
            @elseif (auth()->user()->desa=='KEDUNGDALEM')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Kedungdalem </h1>
            @elseif (auth()->user()->desa=='KALISALAM')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Kalisalam </h1>
            @elseif (auth()->user()->desa=='PABEAN')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Pabean </h1>
            @elseif (auth()->user()->desa=='TAMANSARI')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Tamansari </h1>
            @elseif (auth()->user()->desa=='MRANGGON_LAWANG')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Mranggon lLawang </h1>
            @elseif (auth()->user()->desa=='RANDUPUTIH')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Randuputih </h1>
            @elseif (auth()->user()->desa=='SUMBERAGUNG')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Sumberagung </h1>
            @elseif (auth()->user()->desa=='SUMBERSUKO')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Sumbersuko </h1>
            @elseif (auth()->user()->desa=='NGEPOH')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Ngepoh </h1>
            @elseif (auth()->user()->desa=='WATUWUNGKUK')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Watuwungkuk </h1>
            @elseif (auth()->user()->desa=='SEKARKARE')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Sekarkare </h1>
            @elseif (auth()->user()->desa=='TEGALREJO')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Tegalrejo </h1>
            @elseif (auth()->user()->desa=='KALIREJO')
            <h1 class="m-0 text-dark">Data Kecamatan Dringu Desa Kalirejo </h1>
            @endif
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
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">List Data Warga</h3> --}}
          <a href="/addwarga" class="btn btn-primary btn-sm">Tambah Data</a>
          <a href="/import_page" class="btn btn-primary btn-sm">IMPORT EXCEL</a>

          <div class="card-tools">
          <form action="{{url('search')}}" method="GET">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="cari" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
          </div>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">

            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>ALAMAT</th>

                <th>AKSI</th>
                <th>STATUS</th>

              </tr>
            </thead>
            <tbody>
                @if (auth()->user()->desa == 'DRINGU')
                @foreach($Dringu as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>
                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                     <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                            <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'KEDUNGDALEM')
                @foreach($kedungdalem as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                             <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'KALISALAM')
                @foreach($kalisalam as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>
                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                            <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'PABEAN')
                @foreach($pabean as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                             <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'TAMANSARI')
                @foreach($tamansari as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                                <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                    {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                    <span class="badge badge-success">VERIFIKASI</span>
                                    @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                    {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                    <span class="badge badge-danger">BELUM VERIFIKASI</span>
                                @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'MRANGGON_LAWANG')
                @foreach($mranggon_lawang as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                             <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'RANDUPUTIH')
                @foreach($randuputih as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                             <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'SUMBERAGUNG')
                @foreach($sumberagung as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                            <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'SUMBERSUKO')
                @foreach($sumbersuko as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                             <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'NGEPOH')
                @foreach($ngepoh as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                            <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'WATUWUNGKUK')
                @foreach($watuwungkuk as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                            <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'SEKARKARE')
                @foreach($sekarkare as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                            <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'TEGALREJO')
                @foreach($tegalrejo as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                             <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @elseif(auth()->user()->desa == 'KALIREJO')
                @foreach($kalirejo as $warga )
                <tr>
                <td>{{$warga->id}}</td>
                    <td>{{$warga->nik}}</td>

                <td><a href="/data_warga/{{$warga->id}}/edit">{{$warga->nama_krt}}</a></td>
                    <td>{{$warga->alamat}}</td>
                    <td>
                            <a href="/data_warga/{{$warga->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini Akan di hapus ?')"
                                >Hapus</a></td>
                            <td>@if ($warga->keterangan == "-" || $warga->keterangan == "mampu" || $warga->keterangan == "tidak_mampu" )
                                {{-- <span class="label label-success">VERIFIKASI</span> --}}
                                <span class="badge badge-success">VERIFIKASI</span>
                                @elseif($warga->keterangan == ""|| $warga->keterangan == "." )
                                {{-- <span class="label label-danger">BELUM VERIFIKASI</span> --}}
                                <span class="badge badge-danger">BELUM VERIFIKASI</span>
                            @endif</td>
                        </tr>
                        @endforeach
                @endif

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

@endsection

@section('footer')

@endsection
