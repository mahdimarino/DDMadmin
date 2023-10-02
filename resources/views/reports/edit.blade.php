@extends('staffhome')
@section('content')





<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Edit the Report</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Edit the Report</li>
    </ol>
    </div>
    </div>
    </div>
    </section>
    
    <section class="content">
    <div class="container-fluid">
    <div class="row">
    
    <div class="mx-auto col-md-10">
    
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Edit the Report</h3>
    </div>
    
    
    <form  action="/report/{{$report->id}}" method="POST" >
        @csrf
        @method('PUT')
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Update The Title</label>
    <input type="text" value="{{$report->title}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Update The Title">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Update The Content</label>
    <textarea type="text" value="{{$report->content}}" name="content" cols="30" rows="10" class="form-control"  placeholder="Update the Content"></textarea>
    </div>
    
   
    
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
</div>
</section>


@endsection