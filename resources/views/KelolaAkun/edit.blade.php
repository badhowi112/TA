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
            <li class="breadcrumb-item">Kelola Akun</li>
            <li class="breadcrumb-item active">Edit Akun Operator Desa</li>
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
          {{-- <li class="nav-item">
            <a href="/integrasi_data" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
                 Integrasi Data
              </p>
            </a>
          </li> --}}
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
                Menerima Data verifikasi
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
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($Akun as $data_akun)
        <form role="form" method="POST" action="/kelola_akun/{{$data_akun->id}}/update">
            @csrf
              <div class="card-body">
                  <div class="form-group">
                      <label for="">Nama</label>
                  <input type="text" name="name" value="{{$data_akun->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                    <input type="username" value="{{$data_akun->username}}" name="username" class="form-control" id="exampleInputEmail1">
                      </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                <input type="password" value="{{$data_akun->password}}" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Desa</label>
                    <select required name="desa" class="form-control">
                    <option value="DRINGU" @if ($data_akun->desa =='DRINGU')
                        selected
                    @endif >DRINGU</option>
                    <option value="KEDUNGDALEM" @if ($data_akun->desa =='KEDUNGDALEM')
                        selected
                    @endif >KEDUNGDALEM</option>
                    <option value="KALISALAM" @if ($data_akun->desa =='KALISALAM')
                        selected
                    @endif >KALISALAM</option>
                    <option value="PABEAN" @if ($data_akun->desa =='PABEAN')
                        selected
                    @endif >PABEAN</option>
                    <option value="TAMANSARI" @if ($data_akun->desa =='TAMANSARI')
                        selected
                    @endif >TAMANSARI</option>
                    <option value="MRANGGON LAWANG" @if ($data_akun->desa =='MRANGGON LAWANG')
                        selected
                    @endif >MRANGGON LAWANG</option>
                    <option value="RANDUPUTIH" @if ($data_akun->desa =='RANDUPUTIH')
                        selected
                    @endif >RANDUPUTIH</option>
                    <option value="SUMBERAGUNG" @if ($data_akun->desa =='SUMBERAGUNG')
                        selected
                    @endif >SUMBERAGUNG</option>
                    <option value="SUMBERSUKO" @if ($data_akun->desa =='SUMBERSUKO')
                        selected
                    @endif >SUMBERSUKO</option>
                    <option value="NGEPOH" @if ($data_akun->desa =='NGEPOH')
                        selected
                    @endif >NGEPOH</option>
                    <option value="WATUWUNGKUK" @if ($data_akun->desa =='WATUWUNGKUK')
                        selected
                    @endif >WATUWUNGKUK</option>
                    <option value="SEKARKARE" @if ($data_akun->desa =='SEKARKARE')
                        selected
                    @endif >SEKARKARE</option>
                    <option value="TEGALREJO" @if ($data_akun->desa =='TEGALREJO')
                        selected
                    @endif >TEGALREJO</option>
                    <option value="KALIREJO" @if ($data_akun->desa =='KALIREJO')
                        selected
                    @endif >KALIREJO</option>
                    </select>
                {{-- <input type="text" value="{{$data_akun->desa}}" name="Desa" class="form-control"> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kecamatan</label>
                  <input type="text" value="{{$data_akun->kecamatan}}" name="kecamatan" class="form-control">
                    <input type="text" name="level" value="opdes" class="form-control" hidden/>
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Selesai</button>
              </div>
            </form>
            @endforeach
          </div>
    </div>
</div>
@endsection

@section('footer')

@endsection
