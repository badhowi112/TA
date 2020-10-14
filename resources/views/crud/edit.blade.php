@extends('layouts.master')

@section('wrapper')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Pengaduan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
@endsection

@section('content')
    <div class="row">
      <div class="col-md-3">
        <a href="/pengaduan" class="btn btn-primary btn-block mb-3">Kembali Ke list Pengaduan</a>

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Folders</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item active">
                <a href="#" class="nav-link">
                  <i class="fas fa-inbox"></i> Inbox
                  @foreach ($data as $datas)
                <span class="badge bg-primary float-right">{{$datas->hasil}}</span>
                  @endforeach                  
                </a>
              </li>              
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
      </div>
            
          <div class="col-md-9">
             
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Read Mail</h3>
  
                <div class="card-tools">
                  <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                  <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
              <!-- /.card-header -->
             
              <div class="card-body p-0">
                <div class="mailbox-read-info">
                  <h5>{{$list->subject}}</h5>
                  <h6>From: {{$list->email}}
                    <span class="mailbox-read-time float-right">{{$list->created_at}}</span></h6>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                      <i class="far fa-trash-alt"></i></button>
                    
                  </div>
                  <!-- /.btn-group -->
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                    <i class="fas fa-print"></i></button>
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                  <form>
                  <div class="form-group">
                  <textarea class="form-control" rows="12" disabled >{{$list->pengaduan}}</textarea>

                  </div>
                  <div class="form-group">
                  <img src="{{asset('upload/data/'.$list->gambar)}}" width="500px;" height="300px;" alt="gambar"/>
                
                  </div>
                </form>
              
                </div>
                <!-- /.mailbox-read-message -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-white">
                {{-- <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                  <li>
                    <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>
  
                    <div class="mailbox-attachment-info">
                      <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Sep2014-report.pdf</a>
                          <span class="mailbox-attachment-size clearfix mt-1">
                            <span>1,245 KB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                          </span>
                    </div>
                  </li>
                  <li>
                    <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>
  
                    <div class="mailbox-attachment-info">
                      <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App Description.docx</a>
                          <span class="mailbox-attachment-size clearfix mt-1">
                            <span>1,245 KB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                          </span>
                    </div>
                  </li>
                  <li>
                    <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png" alt="Attachment"></span>
  
                    <div class="mailbox-attachment-info">
                      <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo1.png</a>
                          <span class="mailbox-attachment-size clearfix mt-1">
                            <span>2.67 MB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                          </span>
                    </div>
                  </li>
                  <li>
                    <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png" alt="Attachment"></span>
  
                    <div class="mailbox-attachment-info">
                      <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo2.png</a>
                          <span class="mailbox-attachment-size clearfix mt-1">
                            <span>1.9 MB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                          </span>
                    </div>
                  </li>
                </ul> --}}
              </div>
              <!-- /.card-footer -->
              <div class="card-footer">
                <div class="float-right">
                  {{-- <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button> --}}
                   @if ($list->status == 'sudah_verifikasi')
                   <a name="" id="" class="btn btn-default" href="/data/{{$list->id}}/email" role="button" hidden>
                    <i class="fas fa-reply"></i> Reply</a>              
                   
                   @else
                     
                    <a name="" id="" class="btn btn-default" href="/data/{{$list->id}}/email" role="button">
                      <i class="fas fa-reply"></i> Reply</a>       
                   @endif
                   <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                   
                  </div>
                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
              </div>
              <!-- /.card-footer -->
            </div>
          </div>
        </div>
    </div>
@endsection

@section('footer')
    
@endsection
@section('sidebar')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link">
    <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
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
          <a href="/dashboard" class="nav-link ">
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