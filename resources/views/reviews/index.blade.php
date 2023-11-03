@extends(auth()->user()->user_role === 'employee' ? 'staffhome' : 'home')
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
                    <th style="width: 10%">
                        Review Date
                    </th>
                    <th style="width: 20%">
                      Employee Name
                    </th>
                   
                    <th>
                        Job Title
                    </th>
                    <th style="width: 10%" >
                        Group
                    </th>
                    <th>
                      Rating
                  </th>
                    <th class="text-right" style="width: 20%">
                      Action
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach($reviews as $review) 
              @if(auth()->user()->job_title === 'Account Manager' && $review->reviewer === auth()->user()->name)
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
                    <td style="width: 50px" class="col-1">
                      @php
                      $total = (
                      (int)$review->answer1_personalrate + (int)$review->answer2_personalrate + (int)$review->answer3_personalrate +
                      (int)$review->answer4_personalrate + (int)$review->answer5_personalrate + (int)$review->answer6_personalrate +
                      (int)$review->answer7_personalrate + (int)$review->answer8_personalrate + (int)$review->answer9_personalrate +
                      (int)$review->answer10_personalrate + (int)$review->answer1_seniormanagerrate + (int)$review->answer2_seniormanagerrate +
                      (int)$review->answer3_seniormanagerrate + (int)$review->answer4_seniormanagerrate + (int)$review->answer5_seniormanagerrate +
                      (int)$review->answer6_seniormanagerrate + (int)$review->answer7_seniormanagerrate + (int)$review->answer8_seniormanagerrate +
                      (int)$review->answer9_seniormanagerrate + (int)$review->answer10_seniormanagerrate + (int)$review->answer1_linemanagerrate +
                      (int)$review->answer2_linemanagerrate + (int)$review->answer3_linemanagerrate + (int)$review->answer4_linemanagerrate +
                      (int)$review->answer5_linemanagerrate + (int)$review->answer6_linemanagerrate + (int)$review->answer7_linemanagerrate +
                      (int)$review->answer8_linemanagerrate + (int)$review->answer9_linemanagerrate + (int)$review->answer10_linemanagerrate
                  );
              
                      if ($review->job_title === 'line manager') {
                          $total = ($total/= 2) + (int)$review->seniormanager_evaluation1 +(int)$review->seniormanager_evaluation2 +
                          (int)$review->seniormanager_evaluation3 +(int)$review->seniormanager_evaluation4 +
                          (int)$review->seniormanager_evaluation5 + (int)$review->linemanager_rating1 +(int)$review->linemanager_rating2 +
                          (int)$review->linemanager_rating3 +(int)$review->linemanager_rating4 +(int)$review->linemanager_rating5 ;
                      } else {
                          $total =($total/= 3) + (int)$review->seniormanager_evaluation1 +(int)$review->seniormanager_evaluation2 +
                          (int)$review->seniormanager_evaluation3 +(int)$review->seniormanager_evaluation4 +
                          (int)$review->seniormanager_evaluation5 + (int)$review->linemanager_rating1 +(int)$review->linemanager_rating2 +
                          (int)$review->linemanager_rating3 +(int)$review->linemanager_rating4 +(int)$review->linemanager_rating5 ;;
                      }
                  @endphp
              
                  {{ number_format($total, 2) }}
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
                @elseif(auth()->user()->job_title !== 'Account Manager')


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
                  <td style="width: 50px" class="col-1">
                    @php
                    $total = (
                    (int)$review->answer1_personalrate + (int)$review->answer2_personalrate + (int)$review->answer3_personalrate +
                    (int)$review->answer4_personalrate + (int)$review->answer5_personalrate + (int)$review->answer6_personalrate +
                    (int)$review->answer7_personalrate + (int)$review->answer8_personalrate + (int)$review->answer9_personalrate +
                    (int)$review->answer10_personalrate + (int)$review->answer1_seniormanagerrate + (int)$review->answer2_seniormanagerrate +
                    (int)$review->answer3_seniormanagerrate + (int)$review->answer4_seniormanagerrate + (int)$review->answer5_seniormanagerrate +
                    (int)$review->answer6_seniormanagerrate + (int)$review->answer7_seniormanagerrate + (int)$review->answer8_seniormanagerrate +
                    (int)$review->answer9_seniormanagerrate + (int)$review->answer10_seniormanagerrate + (int)$review->answer1_linemanagerrate +
                    (int)$review->answer2_linemanagerrate + (int)$review->answer3_linemanagerrate + (int)$review->answer4_linemanagerrate +
                    (int)$review->answer5_linemanagerrate + (int)$review->answer6_linemanagerrate + (int)$review->answer7_linemanagerrate +
                    (int)$review->answer8_linemanagerrate + (int)$review->answer9_linemanagerrate + (int)$review->answer10_linemanagerrate
                );
            
                    if ($review->job_title === 'line manager') {
                        $total = ($total/= 2) + (int)$review->seniormanager_evaluation1 +(int)$review->seniormanager_evaluation2 +
                        (int)$review->seniormanager_evaluation3 +(int)$review->seniormanager_evaluation4 +
                        (int)$review->seniormanager_evaluation5 + (int)$review->linemanager_rating1 +(int)$review->linemanager_rating2 +
                        (int)$review->linemanager_rating3 +(int)$review->linemanager_rating4 +(int)$review->linemanager_rating5 ;
                    } else {
                        $total =($total/= 3) + (int)$review->seniormanager_evaluation1 +(int)$review->seniormanager_evaluation2 +
                        (int)$review->seniormanager_evaluation3 +(int)$review->seniormanager_evaluation4 +
                        (int)$review->seniormanager_evaluation5 + (int)$review->linemanager_rating1 +(int)$review->linemanager_rating2 +
                        (int)$review->linemanager_rating3 +(int)$review->linemanager_rating4 +(int)$review->linemanager_rating5 ;;
                    }
                @endphp
            
                {{ number_format($total, 2) }}
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
                  @if(auth()->user()->job_title === 'Account Manager' || auth()->user()->job_title === 'senior manager')
                  <a class="btn btn-info btn-sm" href="/performancereview/{{$review->id}}/edit"> <i class="fa fa-edit" aria-hidden="true"></i>
                  </i>
                  Add Review</a>
                  @endif
                  <a class="btn btn-info btn-sm" href="/performancereview/{{$review['id']}}"> <i class="fa fa-eye" aria-hidden="true"></i>
                  </i>
                  View</a>
                      
                  </td>
              </tr>
              @endif
                @endforeach  
            </tbody>
  
            
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  
      
    </section>
  
@endsection