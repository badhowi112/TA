@extends('layouts.master')

@section('wrapper')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Email</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Pengaduan</li>
            <li class="breadcrumb-item active">Email</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->    
@endsection

@section('content')
    <div class="row">
       
          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Konfirmasi Data Ke Masyarakat</h3>
              </div>
              <!-- /.card-header -->
              <form action="/mail" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                <input class="form-control" value="{{$email->email}}" name="to" placeholder="To:">
                </div>
                <div class="form-group">
                <input class="form-control" value="Menganggapi Laporan Masyarakat" name="subject" placeholder="Subject:">
                </div>
               <div class="form-group">
                 <label > ISI PESAN</label>
                 <textarea class="form-control"  name="message" id="" rows="6"></textarea>
               </div>
             
              </div>
             
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
                  <button type="submit"  class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>

                </div>
                {{-- <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button> --}}
                <a name="" id="" class="btn btn-default" href="/data/{{$email->id}}/edit" role="button"><i class="fas fa-times"></i> Discard</a>
              </div>
            </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
    </div>
@endsection

@section('footer')
    
@endsection
@section('sidebar')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/dashboard_v4" class="brand-link">
    <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
        <a href="#" class="d-block">Dinas Sosial Probolinggo</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/dashboard_v4" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>            
        </li>
        <li class="nav-item">
          <a href="/pengaduan" class="nav-link active">
            <i class="nav-icon fa fa-users"></i>
            <p>
               List Pengaduan 
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