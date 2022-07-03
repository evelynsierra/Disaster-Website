<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disaster Web Dashboard</title>
    <link rel="icon" img src="{{asset('/lte/dist/img/Icon.png')}}" type="image/icon type">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!--Navbar -->
        @include('admin/header')
        <!--/Navbar -->


        <!-- Main Sidebar Container -->
        @include('admin/sidebar')



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Chart View</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Chart View</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- Content -->
            <div class="content">
                
            </div>
            <!-- chart -->
            @include('disaster/barchart')
            <!-- chart -->
            <!-- /.content -->

            <div class="content" style="margin-top:50px;">    
            </div>

            <!-- chart -->
            @include('disaster/yearly')
            <!-- chart -->
            <!-- /.content -->

            <div class="content" style="margin-top:50px;"> 
                <h4 style="margin-left:50px;">Jumlah Fasilitas Umum yang Rusak</h4>   
            </div>

            <!-- chart -->
            @include('disaster/fasum_rusak')
            <!-- chart -->
            <!-- /.content -->

            <div class="content" style="margin-top:50px;">  
            <h4 style="margin-left:50px;">Jumlah Korban yang Hilang</h4>   
            </div>

            <!-- chart -->
            @include('disaster/hilang')
            <!-- chart -->
            <!-- /.content -->

            <div class="content" style="margin-top:50px;">    
            <h4 style="margin-left:50px;">Jumlah Korban yang Meninggal</h4> 
            </div>

            <!-- chart -->
            @include('disaster/meninggal')
            <!-- chart -->
            <!-- /.content -->

            <div class="content" style="margin-top:50px;">    
            <h4 style="margin-left:50px;">Jumlah Rumah Korban yang Rusak</h4> 
            </div>

            <!-- chart -->
            @include('disaster/rumah_rusak')
            <!-- chart -->
            <!-- /.content -->

            <div class="content" style="margin-top:50px;">  
            <h4 style="margin-left:50px;">Jumlah Korban yang Terluka</h4>   
            </div>

            <!-- chart -->
            @include('disaster/terluka')
            <!-- chart -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('admin/footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
    <!-- Chartjs -->
    <script src="{{asset('lte/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Charts -->


</body>

</html>