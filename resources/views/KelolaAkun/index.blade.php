@extends('layouts.master')
@if (session('sukses'))
@endif
@section('wrapper')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Kelola Akun</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">List Akun Operator Desa</li>
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
            <a href="/export_data" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
                Menerima Data Verifikasi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/kelola_akun" class="nav-link active">
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
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <button type="button" class="form-control  btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah Akun </button></h3>

              <div class="card-tools">

                <form method="GET" action="/kelola_akun">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="cari" class="form-control float-right" placeholder="Nama Operator Desa">

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
            <div class="card-body table-responsive p-0" style="height: 250px;">
             
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($Akun as $data_akun)
                    <tr>
                           {{--  <td >{{$data_akun->role}}</td> --}}
                            <td >{{$data_akun->name}}</td>
                            <td >{{$data_akun->Kecamatan}}</td>
                            <td >{{$data_akun->Desa}}</td>
                            <td >{{$data_akun->created_at}}</td>
                            <td > <a href="/kelola_akun/{{$data_akun->id}}/delete" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin data ini Akan di hapus ?')">Hapus</a>
                                 <a href="/kelola_akun/{{$data_akun->id}}/edit" class="btn btn-warning btn-sm"
                                    >Perbarui</a></td>
                           @endforeach
                       </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Akun Operator Desa</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="box-body">
                <form method="POST" action="/kelola_akun/add">
                    @csrf
                  <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="username" name="username" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Kata Sandi</label>
                          <input type="password" name="password" class="form-control" id="exampleInputEmail1" >
                        </div>

                          <div class="form-group">
                            <label>Desa</label>
    						<select required name="desa" class="form-control">
    						<option value=""> </option>
    						<option value="DRINGU">DRINGU</option>
    						<option value="KEDUNGDALEM">KEDUNGDALEM</option>
    						<option value="KALISALAM">KALISALAM</option>
    						<option value="PABEAN">PABEAN</option>
    						<option value="TAMANSARI">TAMANSARI</option>
    						<option value="MRANGGON LAWANG">MRANGGON LAWANG</option>
    						<option value="RANDUPUTIH">RANDUPUTIH</option>
    						<option value="SUMBERAGUNG">SUMBERAGUNG</option>
    						<option value="SUMBERSUKO">SUMBERSUKO</option>
    						<option value="NGEPOH">NGEPOH</option>
    						<option value="WATUWUNGKUK">WATUWUNGKUK</option>
    						<option value="SEKARKARE">SEKARKARE</option>
    						<option value="TEGALREJO">TEGALREJO</option>
    						<option value="KALIREJO">KALIREJO</option>
    						</select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kecamatan</label>
                            <input type="text" value="DRINGU" name="kecamatan" class="form-control">
                            <input type="text" name="level" value="opdes" class="form-control" hidden/>
                          </div>
                </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection

@section('footer')

@endsection
