<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfólio</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('plugins/dist/css/adminlte.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    {!! htmlScriptTagJsApi() !!}

    @stack('styles')

</head>

<body class="hold-transition login-page">
    <div class="my-4" style="width:420px">
        {{-- <div class="login-logo mb-3">
            <a href="{{ route('login') }}"><img src="{{asset('plugins/images/logo.png')}}" width="360"></a>
        </div> --}}
        <x-alert-message />
        <div class="card">
            @yield('content')
        </div>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{asset('plugins/toastr/sweetalert2.min.js')}}"></script>
    <!-- Toastr -->
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    <!-- AdminLTE -->
    <script src="{{asset('plugins/dist/js/adminlte.js')}}"></script>
    <!-- Stylesheets -->
    <script src="{{asset('plugins/dist/js/locastyle.js')}}"></script>
    <!-- Custom APP-->
    <script src="{{asset('plugins/dist/js/custom-app.js')}}"></script>

    @stack('scripts')

</body>
</html>