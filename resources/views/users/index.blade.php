
@extends('home')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Employee List</h1>
      </div>
      
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          
          
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Employee List</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
  <div class="card">
   
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <div class="card-tools">
          {{-- <form action="/users">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
              <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
              </button>
              </div>
              </div>
          </form> --}}
          <thead>
            <tr>
              <th><input onkeyup="filterTable()" type="hidden"></th>
              <th><input onkeyup="filterTable()" type="hidden"></th>
              <th><div class="input-group input-group-sm" style="width: 150px;">
                <input onkeyup="filterTable()" type="text" name="name" class="form-control float-right" placeholder="Search by name">
                </div></th>
                <th><div class="input-group input-group-sm" style="width: 150px;">
                  <input onkeyup="filterTable()" type="text" name="name" class="form-control float-right" placeholder="Search by email">
                  </div></th>
                  <th><div class="input-group input-group-sm" style="width: 150px;">
                    <input onkeyup="filterTable()" type="text" name="name" class="form-control float-right" placeholder="Search by group">
                    </div></th>
             

          </tr>
              <tr>
                  <th style="width: 1%">
                      ID 
                  </th>
                  <th style="width: 15%">
                      Picture
                  </th>
                  <th style="width: 20%">
                    Employee Name
                  </th>
                  <th>
                      Email
                  </th>
                  <th style="width: 15%" >
                      Team
                  </th>
                  <th style="width: 10%">
                    
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach($users as $user) 
            <tr>
                  <td>
                    @if ($user->id == auth()->user()->id)
                <a href="/users/{{ $user->id }}">{{ $user->id }}</a>
            @else
                <a href="/users/profile/{{ $user->id }}">{{ $user->id }}</a>
            @endif
                  </td>

                  <td>
                    
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="{{$user->logo ? asset('storage/' . $user->logo) : asset('/dist/img/download.png')}}">
                        </li>
                        
                    
                </td>
                  <td>
                      <a>
                        {{ $user->name }}
                      </a>
                      <br/>
                      <small>
                        
                        <a  href="/users/?job_title={{ $user->job_title }}">{{ $user->job_title }}</a></span>
                      </small>
                  </td>
                  
                  <td>
                    <a>
                      {{ $user->email }}
                    </a>
                    <br/>
                    
                </td>
                  <td class="">
                      <span class="badge badge-success">
                        <a class="text-light" href="/users/?group_name={{$user->group_name}}">{{ $user->group_name }}</a></span>
                  </td>
                  <td class="project-actions text-right">
                     
                     {{--  <a class="btn btn-info btn-sm" href="#">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                          </i>
                          View
                      </a> --}}
                      @if ($user->id == auth()->user()->id)
                      <a class="btn btn-info btn-sm" href="/users/{{ $user->id }}"><i class="fa fa-eye" aria-hidden="true"></i>
                      </i>
                      View</a>
                  @else
                      <a class="btn btn-info btn-sm" href="/users/profile/{{ $user->id }}"> <i class="fa fa-eye" aria-hidden="true"></i>
                      </i>
                      View</a>
                  @endif
                      
                  </td>
              </tr>
              
              @endforeach  
          </tbody>

          
      </table>
    </div>
    <!-- /.card-body -->
  </div>

    
  </section>

  <!-- Main content -->
{{--   <section class="content">

    
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row">

@foreach($users as $user)
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">

<div class="card bg-light d-flex flex-fill">
  <div class="card-header text-muted border-bottom-0">
    Digital Strategist
  </div>
  <div class="card-body pt-0">
    <div class="row">
      <div class="col-7">
        <h2 class="lead"><b>{{ $user->name }}</b></h2>
        <a  href="/users/{{$user['id']}}">{{$user['id']}}</a>
        <p class="text-muted text-sm"><b>Email : </b> {{ $user->email }} </p>
        <ul class="ml-4 mb-0 fa-ul text-muted">
          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
        </ul>
      </div>
      <div class="col-5 text-center">
        <img src="../../dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
      </div>
    </div>
  </div>
  <div class="card-footer">
    <div class="text-right">
      <a href="#" class="btn btn-sm bg-teal">
        <i class="fas fa-comments"></i>
      </a>
      <a href="#" class="btn btn-sm btn-primary">
        <i class="fas fa-user"></i> Check Performance
      </a>
    </div>
  </div>
</div>
</div>
          @endforeach
        </div>
      </div>
     
      
      
    </div>
   

  </section> --}}

  

  @endsection