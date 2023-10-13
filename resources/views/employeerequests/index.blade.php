@extends('home')
@section('content')




    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Team Requests</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Team Reports</li>
    </ol>
    </div>
    </div>
    </div>
    </section>
    
    <section class="content">
        @foreach($employeerequests as $employeerequest)
    <div class="card m-1">
        
    <div class="card-body">
    <div class="row ">
    <div class="col-12 mx-auto col-md-12 col-lg-10 order-2 order-md-1">
    
    <div class="row">
    <div class="col-12">
    
    
    
    <div class="post clearfix">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
    <span class="username">
    <a href="#">{{ $employeerequest->user_name }}</a>
    </span>
    <span class="description">{{ $employeerequest->user->job_title }}</span>
   
    </div>
    
    <p>
        {{ $employeerequest->content }}
    </p>
    {{-- <p>
    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> {{ $employeerequest->title }}</a>
    </p> --}}
    
    </div>
    
    
    </div>
    </div>
    </div>
   
    </div>
    
    </div>
</div>
    @endforeach
    </section>
    
   


    @endsection