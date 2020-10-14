@extends('layouts.master')

@section('wrapper')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Beranda</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Beranda</li>
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
            <a href="/dashboard_v3" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">

            <a href="/data_warga" class="nav-link">

              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Warga
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            @if (auth()->user()->desa =='DRINGU')
            <a href="/data_warga_1" class="nav-link">
                @elseif(auth()->user()->desa =='KEDUNGDALEM')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='KALISALAM')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='PABEAN')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='TAMANSARI')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='MRANGGON_LAWANG')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='RANDUPUTIH')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='SUMBERAGUNG')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='SUMBERSUKO')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='NGEPOH')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='WATUWUNGKUK')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='SEKARKARE')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='TEGALREJO')
                <a href="/data_warga_1" class="nav-link ">
                @elseif(auth()->user()->desa =='KALIREJO')
                <a href="/data_warga_1" class="nav-link ">
            @endif

              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Warga
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
    @if (auth()->user()->desa =='DRINGU')
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_dringu as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Dringu</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          
        </div>
    </div>
        @elseif(auth()->user()->desa =='KEDUNGDALEM')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_kedungdalem as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Kedungdalem</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='KALISALAM')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_kalisalam as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Kalisalam</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='PABEAN')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_pabean as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Pabean</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='TAMANSARI')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_tamansari as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Tamansari</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='MRANGGON_LAWANG')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_mranggon_lawang as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Mranggon Lawang</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='RANDUPUTIH')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_randuputih as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Randuputih</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='SUMBERAGUNG')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_sumberagung as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Sumberagung</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='SUMBERSUKO')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_sumbersuko as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Sumbersuko</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='NGEPOH')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_ngepoh as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Ngepoh</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='WATUWUNGKUK')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_watuwungkuk as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Watuwungkuk</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='SEKARKARE')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_sekarsare as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Sekarsare</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='TEGALREJO')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_tegalrejo as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Tegalrejo</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
        @elseif(auth()->user()->desa =='KALIREJO')
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            @foreach ($tbl_kalirejo as $warga)
            <h3>{{$warga->hasil}}</h3>

            @endforeach
            <p>Data Warga Desa Kalirejo</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           
        </div>
        </div>
    @endif


        <div class="col-md-12">
          <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Diagram Laporan Keterangan Warga</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 334px;" width="334" height="250" class="chartjs-render-monitor"></canvas>
        </div>
        <!-- /.card-body -->
          </div>
        </div>

</div>
@endsection

@section('footer')
@if (auth()->user()->desa =='DRINGU')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($DRINGU as $dringu)
        {{$dringu->hasil2}},
        {{$dringu->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

  @elseif(auth()->user()->desa =='KALIREJO')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($KALIREJO as $kalirejo)
        {{$kalirejo->hasil2}},
        {{$kalirejo->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='KALISALAM')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($KALISALAM as $kalisalam)
        {{$kalisalam->hasil2}},
        {{$kalisalam->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='KEDUNGDALEM')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($KEDUNGDALEM as $kedungdalem)
        {{$kedungdalem->hasil2}},
        {{$kedungdalem->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='MRANGGON LAWANG')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($MRANGGONLAWANG as $mranggonlawang)
        {{$mranggonlawang->hasil2}},
        {{$mranggonlawang->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='NGEPOH')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($NGEPOH as $ngepoh)
        {{$ngepoh->hasil2}},
        {{$ngepoh->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='PABEAN')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($PABEAN as $pabean)
        {{$pabean->hasil2}},
        {{$pabean->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='RANDUPUTIH')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($RANDUPUTIH as $randuputih)
        {{$randuputih->hasil2}},
        {{$randuputih->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='SEKARSARE')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($SEKARSARE as $sekarsare)
        {{$sekarsare->hasil2}},
        {{$sekarsare->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='SUMBERAGUNG')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($SUMBERAGUNG as $sumberagung)
        {{$sumberagung->hasil2}},
        {{$sumberagung->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='SUMBERSUKO')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($SUMBERSUKO as $sumbersuko)
        {{$sumbersuko->hasil2}},
        {{$sumbersuko->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='TAMANSARI')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($TAMANSARI as $tamansari)
        {{$tamansari->hasil2}},
        {{$tamansari->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='TEGALREJO')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($TEGALREJO as $tegalrejo)
        {{$tegalrejo->hasil2}},
        {{$tegalrejo->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>

@elseif(auth()->user()->desa =='WATUWUNGKUK')

<script>
    $(function () {

  ///-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [ 'BELUM VERIFIKASI','SUDAH VERIFIKASI'


      ],
      datasets: [
      {
        data: [

        @foreach ($WATUWUNGKUK as $watuwungkuk)
        {{$watuwungkuk->hasil2}},
        {{$watuwungkuk->hasil1}},

        @endforeach
        ],
        backgroundColor : ['#f56954', '#00c0ef'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  </script>
@endif
@endsection
