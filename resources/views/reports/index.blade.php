@extends('home')
@section('content')




    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Team Reports</h1>
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
    
    <div class="card">
    
    <div class="card-body">
    <div class="row ">
    <div class="col-12 mx-auto col-md-12 col-lg-10 order-2 order-md-1">
    <div class="row">
    
    
    
    </div>
    <div class="row">
    <div class="col-12">
    <h4>Recent Activity</h4>
    <div class="post">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
    <span class="username">
    <a href="#">Jonathan Burke Jr.</a>
    </span>
    <span class="description">Shared publicly - 7:45 PM today</span>
    </div>
    
    <p>
    Lorem ipsum represents a long-held tradition for designers,
    typographers and the like. Some people hate it and argue for
    its demise, but others ignore.
    </p>
    <p>
    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
    </p>
    </div>
    @foreach($reports as $report)
    <div class="post clearfix">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
    <span class="username">
    <a href="#">{{ $report->user_name }}</a>
    </span>
    <span class="description">Sent you a message - 3 days ago</span>
   
    </div>
    
    <p>
        {{ $report->content }}
    </p>
    <p>
    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> {{ $report->title }}</a>
    </p>
    
    </div>
    @endforeach
    <div class="post">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
    <span class="username">
    <a href="#">Jonathan Burke Jr.</a>
    </span>
    <span class="description">Shared publicly - 5 days ago</span>
    </div>
    
    <p>
    Lorem ipsum represents a long-held tradition for designers,
    typographers and the like. Some people hate it and argue for
    its demise, but others ignore.
    </p>
    <p>
    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
    </p>
    </div>
    </div>
    </div>
    </div>
   
    </div>
    
    </div>
    
    </section>
    
   


    @endsection