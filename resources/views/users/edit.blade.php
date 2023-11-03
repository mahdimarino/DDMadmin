@extends('staffhome')
@section('content')





<section class="content-header">


    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Edit My Profile</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Edit My Profile</li>
    </ol>
    </div>
    </div>
    </div>
    </section>
    
    <section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Enter The New Info</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  action="/users/{{auth()->user()->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT') <div class="card-body">
                  <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">image</label>
                  <div class="col-sm-10">
                    <input type="file" name="logo"  class="form-control" value="{{auth()->user()->logo}}"  placeholder="image">
                  </div>
                </div>  
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="{{auth()->user()->email}}"  id="inputEmail3" placeholder="Email">
                  </div>
                </div>
               <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" name="phone_number" class="form-control" value="{{auth()->user()->phone_number}}" id="inputEmail3" placeholder="Phone Number">
                  </div>
                </div> 
                {{-- <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Job Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="job_title" class="form-control" value="{{auth()->user()->job_title}}" id="inputEmail3" placeholder="Job Title">
                  </div>
                </div> --}}
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                  <div class="col-sm-10">
                    <input type="text" name="location" class="form-control" value="{{auth()->user()->location}}" id="inputEmail3" placeholder="Location">
                  </div>
                </div>
                {{-- <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Group Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="group_name" class="form-control" value="{{auth()->user()->group_name}}" id="inputEmail3" placeholder="Group Name">
                  </div>
                </div>  --}}
                
                
             
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="submit" href="/users/{{auth()->user()->id}}" class="btn btn-default float-right">Cancel</a>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
    
</div>
</section>


@endsection