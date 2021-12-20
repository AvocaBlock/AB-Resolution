<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','judul_title')</title>
    <link rel="icon" href="{{ asset('') }}styles/img/unud.png" type="image/icon type">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
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

<body class="hold-transition sidebar-collapse layout-fixed bg-dark" style="box-shadow: inset 0 0 5rem rgb(0 0 0 / 50%); text-shadow: 0 0.05rem 0.1rem rgb(0 0 0 / 50%);">
    <div class="content container" style="padding:0 10rem">
        <div class="row mx-0">
            <div class="col-md-6 px-0">
                <div class="content-wrapper " style="padding:4rem 6rem">
                    <div class="content px-0 py-4 h-100 text-center rounded-lg d-flex align-content-center justify-content-center flex-wrap">
                        <a href="/dropdowns" style="color:#1f2d3d!important">
                            <h3 >Dropdown Box</h3>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-0 ">
                <div class="content-wrapper " style="padding:4rem 6rem">
                    <div class="content px-0 py-4 h-100 text-center rounded-lg d-flex align-content-center justify-content-center flex-wrap">
                        <a href="/test" style="color:#1f2d3d!important">
                            <h3>Search Box</h3>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
{{-- Toggle Sidebars plugins --}}
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('styles/js/adminlte.js') }}"></script>

{{-- Dropdown Button plugins --}}
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Scroll Overlay -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }} "></script>

</html>
