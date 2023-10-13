

@extends($user->user_role === 'employee' ? 'staffhome' : 'home')


@section('content')




    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>To Do List</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">To Do List</li>
    </ol>
    </div>
    </div>
    </div>
    </section>
    
    <section class="content">
        @foreach($tasks as $task)
    
    <div class="card m-2">
    
    <div class="card-body">
    <div class="row ">
    <div class="col-12 mx-auto col-md-12 col-lg-10 order-2 order-md-1">
    <div class="row">
    
    
    
    </div>
    <div class="row">
    <div class="col-12">
    
   
    
    <div class="post clearfix">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
    <span class="username">
    <a href="#">{{ $task->user_name }}</a>
    </span>
    <span class="description"> {{ $task->user->job_title }}</span>
   
    </div>
    
    <p>
        {{ $task->content }}
    </p>
    <p>
    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> {{ $task->title }}</a>
    </p>
    
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