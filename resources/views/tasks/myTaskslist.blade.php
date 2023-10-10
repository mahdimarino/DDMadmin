@extends('home')
@section('content')


<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>My Tasks list</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">My tasks</li>
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
    <div class="col-12">
    <h4>Recent Task</h4>
    
    @unless ($tasks->isEmpty())
        
    
    @foreach($tasks as $task)
    <div class="post clearfix">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="{{asset('/dist/img/download.png')}}" alt="User Image">
    <span class="username">
    <a href="#">{{ $task->user_name }}</a>
    <a class="float-right btn-tool" style="color: blue" href="/task/{{$task->id}}/edit">
        <i class="nav-icon fas fa-edit"></i>
    </a>


    <form method="POST" action="/task/{{$task->id}}">
        @csrf
        @method('DELETE')
        <button alt="delete" class="float-right btn-tool" type="submit" style="color: red; border: none; background-color: white;">
            <i class="fas fa-times" aria-hidden="true"></i>
        </button>
    </form>
    </span>
    <span class="description">{{ $task->user->job_title }}</span>
    
    </div>
    <h4>{{ $task->title }}</h4>
    <p>
        {{ $task->content }}
    </p>
    <p>
    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Visit the Link</a>
    </p>
    
    </div>
    @endforeach
    @else
    <h1>No tasks found</h1>
    @endunless
    
    </div>
    </div>
   
    </div>
    
    </div>
    
</section>
    
   


    @endsection