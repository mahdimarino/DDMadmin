@extends('staffhome')
@section('content')


<section class="content-header">

    <div class="container-fluid">
    
        <div class="row mb-2">
    
            <div class="col-sm-6">
                <h1>My Reports</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">My Reports</li>
                </ol>
                </div>
                </div>
                </div>
            </section>
    
<section class="content">
    @unless ($reports->isEmpty())
        
    
    @foreach($reports as $report)
    
    <div class="card m-1">
    <div class="card-body">
    <div class="row ">
    <div class="col-12 mx-auto col-md-12 col-lg-10 order-2 order-md-1">
   
    <div class="row">
    <div class="col-12">
    
    
    
    <div class="post clearfix">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="{{asset('/dist/img/download.png')}}" alt="User Image">
    <span class="username">
    <a href="#">{{ $report->user_name }}</a>
    <a class="float-right btn-tool" style="color: blue" href="/report/{{$report->id}}/edit">
        <i class="nav-icon fas fa-edit"></i>
    </a>


    <form method="POST" action="/report/{{$report->id}}">
        @csrf
        @method('DELETE')
        <button alt="delete" class="float-right btn-tool" type="submit" style="color: red; border: none; background-color: white;">
            <i class="fas fa-times" aria-hidden="true"></i>
        </button>
    </form>
    </span>
    <span class="description">{{ $report->user->job_title }}</span>
    
    </div>
    {{-- <h4>{{ $report->title }}</h4> --}}
    <p>
        {{ $report->content }}
    </p>
    <p>
    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Visit the Link</a>
    </p>
    
    </div>
   
</div>
    </div>
    </div>
   
    </div>
    
    </div>
</div>
@endforeach
@else
<h1>No Reports found</h1>
@endunless
</section>
    
   


    @endsection