@extends('home')
@section('content')



<section class="content">
<div class="card card-info">
    <div class="card-header bg-dark">
    <h3 class="card-title">Add Task</h3>
    </div>
    
    
    <form action="/report" method="post" class="form-horizontal">
        @csrf
    <div class="card-body">
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title">
    
    </div>
    </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
    <textarea type="text" name="content" cols="30" rows="10" class="form-control"  placeholder="Description"></textarea>
    </div>
    </div>
    <div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
    
    </div>
    </div>
    </div>
    
    <div class="card-footer">
    <button type="submit" class="btn btn-success">Submit</button>
    
    </div>
    
    </form>
    </div>



</section>

@endsection