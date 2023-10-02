<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition register-page">
  <div class="register-box">
  <div class="card card-outline card-primary">
  <div class="card-header text-center">
  <a href="../../index2.html" class="h1"><b>Sing Up </b></a>
  </div>
  <div class="card-body">
  <p class="login-box-msg">Register a new member</p>
  <form action="/users" method="POST">
    @csrf
      <input type="hidden" name="user_role" value="companystaff" required>  
  <div class="input-group mb-3">
  <input type="text" class="form-control" name="name" placeholder="Full name" required>
  <div class="input-group-append">
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
  <div class="input-group-text">
  <span class="fas fa-user"></span>
  </div>
  </div>
  </div>

   <div class="input-group mb-3">
    <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" required>
    <div class="input-group-append">
      @if(session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
      @endif
    <div class="input-group-text">
    <span class="fas fa-mobile"></span>
    </div>
    </div>
    </div> 

     <div class="input-group mb-3">
      <input type="text" class="form-control" name="job_title" placeholder="Job Title" required>
      <div class="input-group-append">
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
      <div class="input-group-text">
      <span class="fas fa-briefcase"></span>
      </div>
      </div>
      </div> 


  <div class="input-group mb-3">
  <input type="email" name="email" class="form-control" placeholder="Email" required>
  <div class="input-group-append">
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
  <div class="input-group-text">
  <span class="fas fa-envelope"></span>
  </div>
  </div>
  </div>


 
     <div class="input-group mb-3">
      <select name="group_name" class="form-control" required>
          <option value="" disabled selected>Select a Group</option>
          <option value="Group 1">Group 1</option>
          <option value="Group 2">Group 2</option>
          <option value="Group 3">Group 3</option>
      </select>
      @if(session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
      @endif
  </div> 


  <div class="input-group mb-3">
  <input type="password" name="password" class="form-control" placeholder="Password" required>
  <div class="input-group-append">
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
  <div class="input-group-text">
  <span class="fas fa-lock"></span>
  </div>
  </div>
  </div>
  <div class="input-group mb-3">
  <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password" required>
  <div class="input-group-append">
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
  <div class="input-group-text">
  <span class="fas fa-lock"></span>
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-8">
  <div class="icheck-primary">
  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
  <label for="agreeTerms">
  I agree to the <a href="#">terms</a>
  </label>
  </div>
  </div>
  
  <div class="col-4">
  <button type="submit" class="btn btn-primary btn-block">Register</button>
  </div>
  
  </div>
  </form>
  {{-- <div class="social-auth-links text-center">
  <a href="#" class="btn btn-block btn-primary">
  <i class="fab fa-facebook mr-2"></i>
  Sign up using Facebook
  </a>
  <a href="#" class="btn btn-block btn-danger">
  <i class="fab fa-google-plus mr-2"></i>
  Sign up using Google+
  </a>
  </div> --}}
  <a href="login" class="text-center">already have an account</a>
  </div>
  
  </div>
  </div>

  
    
    
    

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>
</html>



