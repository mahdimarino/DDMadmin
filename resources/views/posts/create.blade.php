@extends('home')
@section('content')
    



<h1>create</h1>
<div class="col-xl-12">
    <div class="w-50">
      <x-card>
        <form  action="/listing" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">title</label>
                <input type="text" name="title"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description</label>
                <input type="text" name="description"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tags</label>
                <input type="text" name="tags"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">company</label>
                <input type="text" name="company"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">website</label>
                <input type="text" name="website"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">location</label>
                <input type="text" name="location"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
               <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" name="logo" type="file" id="formFile" required>
              </div> 
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </x-card>
    </div>
</div>

@endsection