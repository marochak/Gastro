<!DOCTYPE html>
<html lang="en">

@include('company.includes.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('company.includes.navbar')

@include('company.includes.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">@yield('content-title')</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid" style="min-height: 100vh;">

                @yield('content')

            </div><!-- /.container-fluid -->
        </div><!-- /.content -->



    </div><!-- /.content-wrapper -->

</div><!-- / .wrapper -->


@include('company.includes.footer')

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('asset/adl/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('asset/adl/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('asset/adl/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('asset/adl/plugins/chartjs2/Chart.min.js') }}"></script>
<script src="{{ asset('asset/adl/js/demo.js') }}"></script>
<script src="{{ asset('asset/adl/js/pages/dashboard3.js') }}"></script>

@yield('Javascript')

</body>
</html>




