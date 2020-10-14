@extends('layouts.master')

@section('wrapper')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Menerima Data Verifikasi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Verifikasi</li>
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
            <a href="/dashboard_v2" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/list_data_warga" class="nav-link">
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
            <a href="/export_data" class="nav-link active">
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
                               <td width="30"><span class="text-muted">INFORMASI MENERIMA DATA VERIFIKASI</span></td>
                               <td width="25%" align="left"></td>
                            </tr>
                           </table>
                           <div class="row">
                            <div class="col-md-12">
                  <div class="form-group">
                  <label>Hal Yang Perlu Diperhatikan Sebagai Berikut :</label>
                    <ol>
                        <li>Data Yang Akan Diambil Berupa File Excel</li>
                        <li>Hasil Data Excel Akan Sesuai Dengan Desa Yang Dipilih</li>

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
        @if ($message = Session::get('Sukses'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>
                @endif
        <div class="card">

            <div class="card-header">
              <h3 class="card-title">List Desa dan Kecamatan</h3>
            </div>

            <!-- /.card-header -->

            <div class="card-body">
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
    <table class="content-table" >
            <thead>
              <tr>
                <th>DESA</th>
                <th>KECAMATAN</th>
                <th>AKSI</th>

              </tr>
              <tbody>
                <tr>
                    <td>Dringu</td>
                    <td>Dringu</td>
                    <td><form action="/export_dringu" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value="Ambil Data">
                    </td>
                </form>

                </tr>
                <tr>
                    <td>Kedung dalem</td>
                    <td>Dringu</td>
                    <td><form action="/export_kedungdalem" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>

                </form>
                </tr>
                <tr>
                    <td>Kalisalam</td>
                    <td>Dringu</td>
                    <td><form action="/export_kalisalam" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Pabean</td>
                    <td>Dringu</td>
                    <td><form action="/export_pabean" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Tamansari</td>
                    <td>Dringu</td>
                    <td><form action="/export_tamansari" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Mranggon Lawang</td>
                    <td>Dringu</td>
                    <td><form action="/export_mranggon_lawang" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Randuputih</td>
                    <td>Dringu</td>
                    <td><form action="/export_randuputih" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Sumberagung</td>
                    <td>Dringu</td>
                    <td><form action="/export_sumberagung" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Sumbersuko</td>
                    <td>Dringu</td>
                    <td><form action="/export_sumbersuko" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Ngepoh</td>
                    <td>Dringu</td>
                    <td><form action="/export_ngepoh" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Watuwungkuk</td>
                    <td>Dringu</td>
                    <td><form action="/export_watuwungkuk" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Sekarkare</td>
                    <td>Dringu</td>
                    <td><form action="/export_sekarsare" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Tegalrejo</td>
                    <td>Dringu</td>
                    <td><form action="/export_tegalrejo" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
                <tr>
                    <td>Kalirejo</td>
                    <td>Dringu</td>
                    <td><form action="/export_kalirejo" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="submit" name=" Ambil Data" class="btn btn-primary" value=" Ambil Data">
                    </td>
                </form>
                </tr>
              </tbody>
            </thead>
    </table>
</div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">

            </div>
          </div>
      <!-- /.card -->
    </div>
  </div>
@endsection

@section('footer')

@endsection
