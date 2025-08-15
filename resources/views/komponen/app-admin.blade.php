<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPTF | @yield('title') | [Admin Pages]</title>
    <link rel="icon" href="{{ asset('assets/img/custom.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/datatables/datatable.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom1.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('komponen.navbar.admin-navbar')

    <div class="content-wrapper">
        @yield('isi')
    </div>

    {{-- <script src="{{ asset('assets/datatables/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/datatable.js') }}"></script> --}}
    <script src="{{ asset('assets/adminLTE/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/adminLTE/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
