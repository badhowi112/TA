@extends('layouts.master')

@section('wrapper')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Kirim Data Kemiskinan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kirim Data</li>
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
            <a href="/kirim_data" class="nav-link active">
              <i class="nav-icon fa fa-database"></i>
              <p>
                Kirim Data Kemiskinan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/export_data" class="nav-link ">
              <i class="nav-icon fa fa-database"></i>
              <p>
                Menerima Data Warga
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
        {{-- <div class="card card-info">
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
                               <td width="30"><span class="text-muted">INFORMASI KIRIM DATA KEMISKINAN</span></td>
                               <td width="25%" align="left"></td>
                            </tr>
                           </table>
                           <div class="row">
                            <div class="col-md-12">
                  <div class="form-group">
                  <label>Hal Yang Perlu Diperhatikan Sebagai Berikut :</label>
                    <ol>
                        <li>Data Yang Akan Dikirim </li>
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
          </div> --}}
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
                <th>FILE EXCEL</th>
                <th>AKSI</th>
                <th>STATUS</th>
              </tr>
              <tbody>
                <tr>
                    <td>Dringu</td>
                    <td>Dringu</td>
                    <td><form action="/import_dringu_1" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                </form>
                <td>
                   @if (Session::has('Dringu'))
                   <span class="badge badge-success">TERKIRIM</span>
                   @else
                   <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                   @endif

                </td>
                </tr>
                <tr>
                    <td>Kedung dalem</td>
                    <td>Dringu</td>
                    <td><form action="/import_kedungdalem" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Kedungdalem'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Kalisalam</td>
                    <td>Dringu</td>
                    <td><form action="/import_kalisalam" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Kalisalam'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Pabean</td>
                    <td>Dringu</td>
                    <td><form action="/import_pabean" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="dringu" name="select_file" />
                    </td>
                    <td><input type="submit" for="dringu" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Pabean'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Tamansari</td>
                    <td>Dringu</td>
                    <td><form action="/import_tamansari" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file"  name="select_file" />
                    </td>
                    <td><input type="submit"  name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Tamansari'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Mranggon Lawang</td>
                    <td>Dringu</td>
                    <td><form action="/import_mranggon_lawang" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Mranggon_Lawang'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Randuputih</td>
                    <td>Dringu</td>
                    <td><form action="/import_randuputih" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Randuputih'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Sumberagung</td>
                    <td>Dringu</td>
                    <td><form action="/import_sumberagung" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Sumberagung'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Sumbersuko</td>
                    <td>Dringu</td>
                    <td><form action="/import_sumbersuko" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Sumbersuko'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Ngepoh</td>
                    <td>Dringu</td>
                    <td><form action="/import_ngepoh" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Ngepoh'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Watuwungkuk</td>
                    <td>Dringu</td>
                    <td><form action="/import_watuwungkuk" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Watuwungkuk'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Sekarsare</td>
                    <td>Dringu</td>
                    <td><form action="/import_sekarsare" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Sekarsare'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Tegalrejo</td>
                    <td>Dringu</td>
                    <td><form action="/import_tegalrejo" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Tegalrejo'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

                     </td>
                </form>
                </tr>
                <tr>
                    <td>Kalirejo</td>
                    <td>Dringu</td>
                    <td><form action="/import_kalirejo" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="select_file" />
                    </td>
                    <td><input type="submit" name="upload" class="btn btn-primary" value="Kirim"></td>
                    <td>
                        @if (Session::has('Kalirejo'))
                        <span class="badge badge-success">TERKIRIM</span>
                        @else
                        <span class="badge badge-danger">TIDAK ADA DATA TERKIRIM</span>

                        @endif

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
