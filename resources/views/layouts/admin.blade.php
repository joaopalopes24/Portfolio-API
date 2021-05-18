<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Desafio OM30</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('plugins/dist/css/adminlte.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">

  @stack('styles')

</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed">

<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
          <i class="far fa-user"></i>
        </a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
          <li><a href="{{route('admin.home.profile')}}" class="dropdown-item">My Profile</a></li>
          <li><a href="{{route('admin.home.change_password')}}" class="dropdown-item">Change Password</a></li>
          <li class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="mr-2 fa fa-sign-out-alt"></i>Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link text-center">
      <img src="{{asset('plugins/images/logo-2.png')}}" alt="#" class="brand-image" style="margin-left: .5rem; margin-right: 0rem;">
      <span class="brand-text font-weight-light">Desafio OM30</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <x-menu permission="show-home" route="admin.home.index" active="admin.home.index" icon="fas fa-chart-bar" name="Home Page"/>
          <x-menu permission="show-system-logs" route="admin.home.index" active="admin.log." icon="fas fa-sync" name="Logs"/>
          <x-menu permission="show-clients" route="admin.home.index" active="admin.client." icon="fas fa-users" name="Clients"/>
          <x-menu permission="show-administrators" route="admin.admin.index" active="admin.admin." icon="fas fa-user-shield" name="Administrators"/>
          <x-menu permission="show-roles" route="admin.role.index" active="admin.role." icon="far fa-newspaper" name="Roles"/>
          <x-menu permission="show-permissions" route="admin.home.index" active="admin.permission." icon="fas fa-paperclip" name="Permissions"/>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper" style="padding-bottom: 20px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">@yield('subtitle')</li>
              <li class="breadcrumb-item active">@yield('caption')</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; {{ date('Y') }} - 
    <a href="https://gitlab.com/joaopalopes24/challenge-om30" target="_blank">
      João Pedro Lopes.
    </a></strong> 
    All rights reserved.
    <div class="float-right d-none d-sm-inline">
      <strong>Version</strong> 1.0.0
    </div>
  </footer>
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
<script src="{{asset('plugins/dist/js/adminlte.min.js')}}"></script>
<!-- Stylesheets -->
<script src="{{asset('plugins/dist/js/locastyle.js')}}"></script>

<script>
  // JavaScript code to disable form submission if there are invalid fields
  (function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>

<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });

    @if($errors->has('success'))
      toastr.success("{{ $errors->first('success') }}")
    @elseif($errors->has('warning'))
      toastr.warning("{{ $errors->first('warning') }}")
    @elseif($errors->any())
      @foreach ($errors->all() as $error)
        toastr.error("{{ $error }}")
      @endforeach
    @endif
  });
</script>

<script>
  (function() {
    $('#setting_id').change(function() {
      $('#change_year').submit();
    });
  })();
</script>

@stack('scripts')

</body>
</html>