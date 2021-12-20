<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','judul_title')</title>
        <link rel="icon" href="{{ asset('') }}styles/img/unud.png" type="image/icon type">
      
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('styles/css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    </head>
<body class="hold-transition sidebar-collapse layout-fixed">
    @yield('navbar')
    @yield('sidebar')
    @yield('login')
    <div class="content-wrapper">
        <div class="content-header py-4">
            <div class="container fluid pl-4">
                <div class="row ">
                    {{-- LEFT HEADER --}}
                    <div class="col-sm-6">
                        <h1 class="m-0 font-weight-bold">FAQ-NG</h1>
                    </div>
                    {{-- RIGHT HEADER --}}
                    <div class="col-sm-6">
                        {{-- MAKE THE HEADER GOES RIGHT AND CAN BREADCRUMB --}}
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">@yield('bread_title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @yield('konten')
    </div> 
</body>
{{-- Toggle Sidebars plugins--}}
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('styles/js/adminlte.js') }}"></script>

{{-- Dropdown Button plugins--}}
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Scroll Overlay -->
<script src= "{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }} "></script>




</html>