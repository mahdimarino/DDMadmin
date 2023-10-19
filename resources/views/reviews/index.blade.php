@extends('home')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Performance Reviews</h1>
        </div>
        
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
            
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Performance Reviews</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <div class="card">
     
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <div class="card-tools">
            {{-- <form action="/users">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
                </button>
                </div>
                </div>
            </form> --}}
            <thead>
              <tr>
                <th><input onkeyup="filterTable()" type="hidden"></th>
                <th><input onkeyup="filterTable()" type="hidden"></th>
                <th><div class="input-group input-group-sm" style="width: 150px;">
                  <input onkeyup="filterTable()" type="text" name="name" class="form-control float-right" placeholder="Search by name">
                  </div></th>
                  <th><div class="input-group input-group-sm" style="width: 150px;">
                    <input onkeyup="filterTable()" type="text" name="name" class="form-control float-right" placeholder="Search by email">
                    </div></th>
                    <th><div class="input-group input-group-sm" style="width: 150px;">
                      <input onkeyup="filterTable()" type="text" name="name" class="form-control float-right" placeholder="Search by group">
                      </div></th>
               
  
            </tr>
                <tr>
                    <th style="width: 1%">
                        ID 
                    </th>
                    <th style="width: 15%">
                        Review Date
                    </th>
                    <th style="width: 20%">
                      Employee Name
                    </th>
                    <th>
                        Job Title
                    </th>
                    <th style="width: 10%" >
                        Team
                    </th>
                    <th class="text-right" style="width: 20%">
                      Action
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach($reviews as $review) 
              <tr>
                    <td>
                     
                  {{-- <a href="/users/profile/{{ $user->id }}">{{ $review->id }}</a> --}}
             <a href="#">
                {{ $review->id }}
             </a>
                    </td>
  
                    <td>
                      
                       
                            {{ $review->date_of_review }}
                          
                          
                      
                  </td>
                    <td>
                        <a>
                          {{ $review->name }}
                        </a>
                        {{-- <br/>
                        <small>
                          
                          <a  href="/users/?job_title={{ $review->job_title }}">{{ $review->job_title }}</a></span>
                        </small> --}}
                    </td>
                    
                    
                    <td class="">
                        {{ $review->job_title }}
                          {{-- <a class="text-light" href="/users/?group_name={{$user->group_name}}">{{ $user->group_name }}</a></span> --}}
                    </td>
                    <td class="">
                        {{ $review->group_name }}
                          {{-- <a class="text-light" href="/users/?group_name={{$user->group_name}}">{{ $user->group_name }}</a></span> --}}
                    </td>
                    <td class="project-actions text-right">
                       
                       {{--  <a class="btn btn-info btn-sm" href="#">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                            </i>
                            View
                        </a> --}}
                       {{--  @if ($user->id == auth()->user()->id)
                        <a class="btn btn-info btn-sm" href="/users/{{ $user->id }}"><i class="fa fa-eye" aria-hidden="true"></i>
                        </i>
                        View</a>
                    @else
                        <a class="btn btn-info btn-sm" href="/users/profile/{{ $user->id }}"> <i class="fa fa-eye" aria-hidden="true"></i>
                        </i>
                        View</a>
                    @endif --}}
                    <a class="btn btn-info btn-sm" href="/performancereview/{{$review->id}}/edit"> <i class="fa fa-edit" aria-hidden="true"></i>
                    </i>
                    Add Review</a>
                    <a class="btn btn-info btn-sm" href="/performancereview/{{$review['id']}}"> <i class="fa fa-eye" aria-hidden="true"></i>
                    </i>
                    View</a>
                        
                    </td>
                </tr>
                
                @endforeach  
            </tbody>
  
            
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  
      
    </section>
  
@endsection