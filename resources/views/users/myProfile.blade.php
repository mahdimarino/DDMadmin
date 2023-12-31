@extends('staffhome')

@section('content')
    

    
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">User Profile</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
    
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center image">
                     <a target="_blank" href="{{$users->logo ? asset('storage/' . $users->logo) : asset('/dist/img/download.png')}}"> <img class="profile-user-img img-fluid img-circle" 
                      style="height: 120px; width: 120px;"
                      src="{{$users->logo ? asset('storage/' . $users->logo) : asset('/dist/img/download.png')}}" alt="User profile picture"></a>
                    </div>
    
                    <h3 class="profile-username text-center">{{$users->name}}</h3>
    
                    {{-- <p class="text-muted text-center">{{$users->job_title}}</p> --}}
    
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Job Title</b> <a class="float-right">{{$users->job_title}}</a>
                      </li>
                      <li class="list-group-item">
                        <b><i class="fa-solid nav-icon fas fa-users mr-1"></i> Group</b> <a class="float-right">{{$users->group_name}}</a>
                      </li>
                      <li class="list-group-item">
                        <b><i class="far fa-file-alt mr-1"></i> Reports</b> <a class="float-right" href="/report/myReports">My Reports</a>
                      </li>
                    </ul>
    
                    <a href="/users/{{$users->id}}/edit" class="btn btn-primary btn-block"><b>Edit</b></a>
                    
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
                <!-- About Me Box -->
               
                <!-- /.card -->
              </div>
              <div class="card card-primary col-md-8">
                <div class="card-header">
                  <h3 class="card-title">Contact Info</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
  
                  <p class="text-muted">
                    {{$users->email}}
                  </p>
  
                  <hr>
  
                  <strong><i class="fas fa-mobile mr-1"></i> Phone Number</strong>
  
                  <p class="text-muted">{{$users->phone_number}}</p>
  
                  <hr>
  
                  
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                  
  
                  <p class="text-muted">{{$users->location}}</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.col -->
              
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      
@endsection