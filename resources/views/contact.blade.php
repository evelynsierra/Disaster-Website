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

    <!-- for map -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>

</head>

<body class="hold-transition sidebar-mini" style="background-color:#D8EEF5">
    <div class="wrapper">
        <!--Navbar -->
        @include('admin/header')
        <!--/Navbar -->


        <!-- Main Sidebar Container -->
        @include('admin/sidebarrequest')



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Request</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Request</a></li>
                                <li class="breadcrumb-item active">Request Dataset</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body row">
                        <div class="col-5 text-center d-flex align-items-center justify-content-center">
                            <div class="">
                                <h2><strong>Miti</strong>gate</h2>
                                <p class="lead mb-5">123 Testing Ave, Testtown, 9876 NA<br>
                                    Phone: +1 234 56789012
                                </p>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="inputName" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">E-Mail</label>
                                <input type="email" id="inputEmail" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="inputSubject">Subject</label>
                                <input type="text" id="inputSubject" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">Message</label>
                                <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Send message">
                            </div>
                        </div>
                    </div>
                </div>

            </section>
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
    <!-- bs-custom-file-input -->
    <script src="{{asset('lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>

</body>

</html>