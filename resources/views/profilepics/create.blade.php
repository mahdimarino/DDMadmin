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
            <form action="/profilepic" method="post" class="form-horizontal">
              @csrf <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">image</label>
                  <div class="col-sm-10">
                    <input type="file" name="logo"  class="form-control"  placeholder="image">
                  </div>
                </div>
               
                
                
                
              </div>
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