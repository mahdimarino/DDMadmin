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
<body class="hold-transition sidebar-mini layout-fixed">
  @auth
<div class="wrapper">

  <!-- Preloader -->
  

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> --}}

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-users "></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          <div class="dropdown-divider"></div>
          <a href="/users/?group_name=RevLine%20Marketing" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>  RevLine Marketing
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="/users/?group_name=DemandSkill" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> DemandSkill
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="/users/?group_name=Identify%20Pulse" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Identify Pulse
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="/users/?group_name=Arista%20Demand" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Arista Demand
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="/users/?group_name=2XPand" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 2XPand
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="/users/?group_name=Advance%20B2B%20Media" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Advance B2B Media
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="/users/?group_name=Lead2Pipeline" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> US,EMEA&APAC-Lead2Pipeline
            
          </a>
          
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <form method="post" action="/logout">
          @csrf
        <button class="nav-link btn" type="submit" alt="logout" data-slide="true"  role="button">
          <i class="fas nav-icon fa-sign-out-alt"></i>
        </button>
       </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img style="height: 2.1rem ; width: 2.1rem;" src="{{auth()->user()->logo ? asset('storage/' . auth()->user()->logo) : asset('/dist/img/download.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
          <x-flashmessage />
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/listing/create" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Create Post</p>
                </a>
              </li>
              
              
              
            </ul> --}}
            <li class="nav-item">
              <a href="/task/create" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>Add Task</p>
              </a>
            </li>
          </li>
          <li class="nav-item">
            <a href="/users" class="nav-link">
              
              
              <i class="fa-solid nav-icon fas fa-user"></i>
              <p>
                Team members
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid nav-icon fas fa-users"></i>
              <p>
                Groups
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/users/?group_name=RevLine%20Marketing" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RevLine Marketing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/?group_name=Lead2Pipeline" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>US, EMEA & APAC - Lead2Pipeline Inc.</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/?group_name=DemandSkill" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DemandSkill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/?group_name=Identify%20Pulse" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Identify Pulse</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/?group_name=Arista%20Demand" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arista Demand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/?group_name=2XPand" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>2XPand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/?group_name=Advance%20B2B%20Media" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advance B2B Media</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MORE LINKS</li>
         
          <li class="nav-item">
            <a href="/task" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>To Do List 
                {{-- <span class="badge badge-info right">2</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/report" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/employeerequest" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
               Requests
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/review/ranking" class="nav-link">
              <i class="nav-icon fas fa-medal"></i>
              <p>
               Ranking
              </p>
            </a>
          </li>
          
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item">
            <a href="/task/myTaskslist" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               My Tasks
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/performancereview" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>Performance Reviews 
                {{-- <span class="badge badge-info right">2</span> --}}
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            
            <a href="/review/create" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Start a Review
              </p>
            </a>
          </li> --}}
          
          <li  class=" text-light">
            <form method="post" action="/logout">
              @csrf
            <button style="background-color: transparent; border: none; " type="submit" class=" text-light ml-3 mt-3 ">
              
              <i class="fas nav-icon fa-sign-out-alt"></i>
              
              
               Logout
              
            
            </button>
          </form>
          </li>
         {{--  <li class="nav-item">
            <form method="post" action="/logout">
              @csrf
            <button class="nav-link btn" type="submit" alt="logout" data-slide="true"  role="button">
              <i class="fas nav-icon fa-sign-out-alt"></i>
            </button>
           </form>
          </li>
           --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   {{--  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          
        </div>
      </div>
    </div> --}}
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <x-flashmessage />
       <div >@yield('content')</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
@else
<div><form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form><p>you dont have acout <a href="/register">register</a></p></div>
@endauth
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script>
  function filterTable() {
    const query = q => document.querySelectorAll(q);
    const filters = [...query('th input')].map(e => new RegExp(e.value, 'i'));

    query('tbody tr').forEach(row => row.style.display =
        filters.every((f, i) => f.test(row.cells[i].textContent)) ? '' : 'none');
}
</script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
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
<script src="//unpkg.com/alpinejs" defer></script>



</body>
</html>
