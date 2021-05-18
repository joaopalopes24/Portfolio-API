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
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('plugins/dist/css/adminlte.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
</head>

<body class="hold-transition login-page" {{-- style="background-color: #AF86CD;" --}}>
<div class="login-box">
  <div class="login-logo mb-3">
    <img src="{{asset('plugins/images/logo.png')}}" width="360">
  </div>
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

    @if(session('status'))
      toastr.success("{{ session('status') }}")
    @elseif($errors->has('success'))
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

</body>
</html>