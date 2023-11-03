<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="container">
        <div class="card-header text-center px-auto">
            <h1 class=" text-center mx-auto m-5">Employee Performance Review Document

            </h1>
            </div>
        <table class="table table-bordered">
            
            <tbody>
              <tr>
                <th >Employee Name:</th>
                <td>{{ $review->name }}</td>
                <td ><b>Job Title:</b>
                </td>
                <td>{{$review->job_title}}</td>
              </tr>
              <tr>
                <th >Review Period:</th>
                <td>{{ $review->review_period }}</td>
                <td ><b>Date of Review:</b></td>
                <td>{{$review->date_of_review}}</td>
              </tr>
              <tr>
                <th >Reviewer:</th>
                <td>{{$review->reviewer}}</td>
                <td ><b>Job Title:</b>
                </td>
                <td>{{$review->job_title}}</td>
              </tr>
              
            </tbody>
          </table>
          <div class="row">
            <div class="col-12">
            <div class="card">
            <div class="card-header text-center px-auto">
            <h4 class=" text-center mx-auto">DDM Rating Scale
            </h4>
            </div>
            
            <div class="card-body">
            <table class="table table-bordered table-hover">
            <thead>
            <tr>
            
            <th>Overall Score </th>
            <th>Identifier</th>
            <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr data-widget="expandable-table" aria-expanded="false">
            
            <td>80-100 </td>
            <td>Outstanding </td>
            <td>The performance demonstrates high levels of achievement and commitment, as well as quality, promptness,
                technical competence, knowledge, creativity, and initiative.
                </td>
            </tr>
            
            <tr data-widget="expandable-table" aria-expanded="true">
            
            <td>60-79 </td>
            <td>Very Good</td>
            <td>The performance not only exceeded expectations but went beyond what was anticipated, indicating a
                remarkable degree of competence and success in multiple aspects.</td>
            </tr>
            <tr data-widget="expandable-table" aria-expanded="true">
            
                <td>30-59 </td>
                <td>Satisfactory</td>
                <td>The performance matched the expectations in terms of work quality, efficiency, and promptness.
                </td>
                </tr>
                <tr data-widget="expandable-table" aria-expanded="true">
            
                    <td>20-39  </td>
                    <td>Needs Improvement </td>
                    <td>The performance failed to meet expectations, indicating a shortfall in achieving the anticipated standards in
                        terms of quality, efficiency, and other relevant measures.</td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="true">
            
                        <td>0-19 </td>
                        <td>Poor </td>
                        <td>The performance has fallen beneath expectations consistently, highlighting the need for significant
                            improvement in one or more crucial areas.</td>
                        </tr>
           
            
            </tbody>
            </table>
            </div>
           
        
            
            </div>
            
            </div>
            </div>
            {{-- ////////// --}}
            <div class="row">
                
                
                <div class="card-body">
                <table class="table table-bordered table-hover">
                <thead>
                <tr>
                
                <th class="text-center w-50"><b>GOALS AND OBJECTIVES</b><br> List a minimum of three goals/objectives for the next 12 months.  </th>
                <th style="width: 15%" class="text-center ">Achieved / Not Achieved </th>
                <th class="text-center ">Comments
                </th>
                </tr>
                </thead>
                <tbody>
                <tr data-widget="expandable-table" aria-expanded="false">
                
                <td>{{$review->goal1}} </td>
                <td class="text-center">{{$review->achievedornot1}}</td>
                <td> {{$review->goal1comment}}</td>
                </tr>
                <tr data-widget="expandable-table" aria-expanded="false">
                
                    <td>{{$review->goal2}} </td>
                    <td class="text-center">{{$review->achievedornot2}}</td>
                    <td> {{$review->goal2comment}}</td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                
                        <td>{{$review->goal3}} </td>
                        <td class="text-center">{{$review->achievedornot3}}</td>
                        <td> {{$review->goal3comment}}</td>
                        </tr>
                        <tr data-widget="expandable-table" aria-expanded="false">
                
                            <td>{{$review->goal4}} </td>
                            <td class="text-center">{{$review->achievedornot4}}</td>
                            <td> {{$review->goal4comment}}</td>
                            </tr>
                             <tr data-widget="expandable-table" aria-expanded="false">
                
                <td>{{$review->goal5}} </td>
                <td class="text-center">{{$review->achievedornot5}}</td>
                <td> {{$review->goal5comment}}</td>
                </tr>
                
                
               
                    
                        
               
                
                </tbody>
                </table>
                
                
                </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header text-center px-auto">
                    <h4 class=" text-center mx-auto">LINE MANAGER’S RATING

                    </h4>
                    </div>
                    <div class="card-header text-center px-auto">
                        <label for="inputEmail3" class="col-sm-12 col-form-label">Ratings Definition : <span class="mx-3"> 5 = Always  </span> <span class="mx-3"> 4 = Often  </span> <span class="mx-3"> 3 = Sometimes </span> <span class="mx-3"> 2 = Occasionally </span> <span class="mx-3"> 1 = Never </span> </label>
             
                        </div>
                            <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                            
                            <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                            <th style="width: 10%" class="text-center ">E </th>
                            <th  style="width: 10%" class="text-center ">L-M
                            </th>
                            <th style="width: 10%" class="text-center ">S-M
                            </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-widget="expandable-table" aria-expanded="false">
                            
                            <td>1. Sets an example for high-quality work among his or
                                her co-workers  </td>
                            <td class="text-center">{{$review->answer1_personalrate}}</td>
                            
                            <td class="text-center"> {{$review->answer1_linemanagerrate}}</td>
                            <td class="text-center"> {{$review->answer1_seniormanagerrate}}</td>
                            </tr>               
                            </tbody>
                            </table>
                            <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                
                                  <tr>
                                    <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                    <td style="width: 10%">E</td>
                                    <td style="width: 80%">{{$review->answer1_personalcomment}}</td>
                                    
                                  </tr>
                                  <tr>
                                    <td>L-M</td>
                                    <td>{{$review->answer1_linemanagercomment}}</td>
                                  </tr>
                                  <tr>
                                    <td>S-M</td>
                                    <td>{{$review->answer1_seniormanagercomment}}</td>
                                  </tr>
                              </table>
                              <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                
                                <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                                <th style="width: 10%" class="text-center ">E </th>
                                <th  style="width: 10%" class="text-center ">L-M
                                </th>
                                <th style="width: 10%" class="text-center ">S-M
                                </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                
                                <td>2. Consistently produces thorough and error-free work  </td>
                                <td class="text-center">{{$review->answer2_personalrate}}</td>
                                
                                <td class="text-center"> {{$review->answer2_linemanagerrate}}</td>
                                <td class="text-center"> {{$review->answer2_seniormanagerrate}}</td>
                                </tr>               
                                </tbody>
                                </table>
                                <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                    
                                      <tr>
                                        <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                        <td style="width: 10%">E</td>
                                        <td style="width: 80%">{{$review->answer2_personalcomment}}</td>
                                        
                                      </tr>
                                      <tr>
                                        <td>L-M</td>
                                        <td>{{$review->answer2_linemanagercomment}}</td>
                                      </tr>
                                      <tr>
                                        <td>S-M</td>
                                        <td>{{$review->answer2_seniormanagercomment}}</td>
                                      </tr>
                                  </table>
                                  <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    
                                    <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                                    <th style="width: 10%" class="text-center ">E </th>
                                    <th  style="width: 10%" class="text-center ">L-M
                                    </th>
                                    <th style="width: 10%" class="text-center ">S-M
                                    </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                    
                                    <td>3. Encourages and assists others in enhancing the
                                        quality of their work  </td>
                                    <td class="text-center">{{$review->answer3_personalrate}}</td>
                                    
                                    <td class="text-center"> {{$review->answer3_linemanagerrate}}</td>
                                    <td class="text-center"> {{$review->answer3_seniormanagerrate}}</td>
                                    </tr>               
                                    </tbody>
                                    </table>
                                    <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                        
                                          <tr>
                                            <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                            <td style="width: 10%">E</td>
                                            <td style="width: 80%">{{$review->answer3_personalcomment}}</td>
                                            
                                          </tr>
                                          <tr>
                                            <td>L-M</td>
                                            <td>{{$review->answer3_linemanagercomment}}</td>
                                          </tr>
                                          <tr>
                                            <td>S-M</td>
                                            <td>{{$review->answer3_seniormanagercomment}}</td>
                                          </tr>
                                      </table>
                                      <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                        
                                        <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                                        <th style="width: 10%" class="text-center ">E </th>
                                        <th  style="width: 10%" class="text-center ">L-M
                                        </th>
                                        <th style="width: 10%" class="text-center ">S-M
                                        </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                        
                                        <td>4. Is adept at providing and receiving feedback
                                            constructively  </td>
                                        <td class="text-center">{{$review->answer4_personalrate}}</td>
                                        
                                        <td class="text-center"> {{$review->answer4_linemanagerrate}}</td>
                                        <td class="text-center"> {{$review->answer4_seniormanagerrate}}</td>
                                        </tr>               
                                        </tbody>
                                        </table>
                                        <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                            
                                              <tr>
                                                <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                                <td style="width: 10%">E</td>
                                                <td style="width: 80%">{{$review->answer4_personalcomment}}</td>
                                                
                                              </tr>
                                              <tr>
                                                <td>L-M</td>
                                                <td>{{$review->answer4_linemanagercomment}}</td>
                                              </tr>
                                              <tr>
                                                <td>S-M</td>
                                                <td>{{$review->answer4_seniormanagercomment}}</td>
                                              </tr>
                                          </table>
                                          <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                            
                                            <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                                            <th style="width: 10%" class="text-center ">E </th>
                                            <th  style="width: 10%" class="text-center ">L-M
                                            </th>
                                            <th style="width: 10%" class="text-center ">S-M
                                            </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                            
                                            <td>5. Communicates clearly and effectively, both verbally
                                                and in writing
                                                  </td>
                                            <td class="text-center">{{$review->answer5_personalrate}}</td>
                                            
                                            <td class="text-center"> {{$review->answer5_linemanagerrate}}</td>
                                            <td class="text-center"> {{$review->answer5_seniormanagerrate}}</td>
                                            </tr>               
                                            </tbody>
                                            </table>
                                            <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                                
                                                  <tr>
                                                    <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                                    <td style="width: 10%">E</td>
                                                    <td style="width: 80%">{{$review->answer5_personalcomment}}</td>
                                                    
                                                  </tr>
                                                  <tr>
                                                    <td>L-M</td>
                                                    <td>{{$review->answer5_linemanagercomment}}</td>
                                                  </tr>
                                                  <tr>
                                                    <td>S-M</td>
                                                    <td>{{$review->answer5_seniormanagercomment}}</td>
                                                  </tr>
                                              </table>
                                              <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                
                                                <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                                                <th style="width: 10%" class="text-center ">E </th>
                                                <th  style="width: 10%" class="text-center ">L-M
                                                </th>
                                                <th style="width: 10%" class="text-center ">S-M
                                                </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                
                                                <td>6. Contributes positively to team goals, initiatives, and
                                                    morale
                                                     </td>
                                                <td class="text-center">{{$review->answer6_personalrate}}</td>
                                                
                                                <td class="text-center"> {{$review->answer6_linemanagerrate}}</td>
                                                <td class="text-center"> {{$review->answer6_seniormanagerrate}}</td>
                                                </tr>               
                                                </tbody>
                                                </table>
                                                <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                                    
                                                      <tr>
                                                        <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                                        <td style="width: 10%">E</td>
                                                        <td style="width: 80%">{{$review->answer6_personalcomment}}</td>
                                                        
                                                      </tr>
                                                      <tr>
                                                        <td>L-M</td>
                                                        <td>{{$review->answer6_linemanagercomment}}</td>
                                                      </tr>
                                                      <tr>
                                                        <td>S-M</td>
                                                        <td>{{$review->answer6_seniormanagercomment}}</td>
                                                      </tr>
                                                  </table>
                                                  <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                    
                                                    <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                                                    <th style="width: 10%" class="text-center ">E </th>
                                                    <th  style="width: 10%" class="text-center ">L-M
                                                    </th>
                                                    <th style="width: 10%" class="text-center ">S-M
                                                    </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr data-widget="expandable-table" aria-expanded="false">
                                                    
                                                    <td>7. Can be relied upon to complete tasks accurately  </td>
                                                    <td class="text-center">{{$review->answer7_personalrate}}</td>
                                                    
                                                    <td class="text-center"> {{$review->answer7_linemanagerrate}}</td>
                                                    <td class="text-center"> {{$review->answer7_seniormanagerrate}}</td>
                                                    </tr>               
                                                    </tbody>
                                                    </table>
                                                    <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                                        
                                                          <tr>
                                                            <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                                            <td style="width: 10%">E</td>
                                                            <td style="width: 80%">{{$review->answer7_personalcomment}}</td>
                                                            
                                                          </tr>
                                                          <tr>
                                                            <td>L-M</td>
                                                            <td>{{$review->answer7_linemanagercomment}}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>S-M</td>
                                                            <td>{{$review->answer7_seniormanagercomment}}</td>
                                                          </tr>
                                                      </table>
                                                      <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                                                        <thead>
                                                        <tr>
                                                        
                                                        <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                                                        <th style="width: 10%" class="text-center ">E </th>
                                                        <th  style="width: 10%" class="text-center ">L-M
                                                        </th>
                                                        <th style="width: 10%" class="text-center ">S-M
                                                        </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr data-widget="expandable-table" aria-expanded="false">
                                                        
                                                        <td>8. Punctually reports for work and provides advance
                                                            notice of any anticipated absences  </td>
                                                        <td class="text-center">{{$review->answer8_personalrate}}</td>
                                                        
                                                        <td class="text-center"> {{$review->answer8_linemanagerrate}}</td>
                                                        <td class="text-center"> {{$review->answer8_seniormanagerrate}}</td>
                                                        </tr>               
                                                        </tbody>
                                                        </table>
                                                        <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                                            
                                                              <tr>
                                                                <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                                                <td style="width: 10%">E</td>
                                                                <td style="width: 80%">{{$review->answer8_personalcomment}}</td>
                                                                
                                                              </tr>
                                                              <tr>
                                                                <td>L-M</td>
                                                                <td>{{$review->answer8_linemanagercomment}}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>S-M</td>
                                                                <td>{{$review->answer8_seniormanagercomment}}</td>
                                                              </tr>
                                                          </table>
                                                          <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                                                            <thead>
                                                            <tr>
                                                            
                                                            <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                                                            <th style="width: 10%" class="text-center ">E </th>
                                                            <th  style="width: 10%" class="text-center ">L-M
                                                            </th>
                                                            <th style="width: 10%" class="text-center ">S-M
                                                            </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                            
                                                            <td>9. Takes instructions and or directions with good
                                                                judgment and follows leaders effectively  </td>
                                                            <td class="text-center">{{$review->answer9_personalrate}}</td>
                                                            
                                                            <td class="text-center"> {{$review->answer9_linemanagerrate}}</td>
                                                            <td class="text-center"> {{$review->answer9_seniormanagerrate}}</td>
                                                            </tr>               
                                                            </tbody>
                                                            </table>
                                                            <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                                                
                                                                  <tr>
                                                                    <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                                                    <td style="width: 10%">E</td>
                                                                    <td style="width: 80%">{{$review->answer9_personalcomment}}</td>
                                                                    
                                                                  </tr>
                                                                  <tr>
                                                                    <td>L-M</td>
                                                                    <td>{{$review->answer9_linemanagercomment}}</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>S-M</td>
                                                                    <td>{{$review->answer9_seniormanagercomment}}</td>
                                                                  </tr>
                                                              </table>
                                                              <table style="margin-bottom: 0rem !important;" class="table table-bordered table-hover">
                                                                <thead>
                                                                <tr>
                                                                
                                                                <th style="width: 70%" class="text-center "><b>Quality</b>  </th>
                                                                <th style="width: 10%" class="text-center ">E </th>
                                                                <th  style="width: 10%" class="text-center ">L-M
                                                                </th>
                                                                <th style="width: 10%" class="text-center ">S-M
                                                                </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                                
                                                                <td>10. Plays a consistent role in elevating existing standards
                                                                    for our development and achievements  </td>
                                                                <td class="text-center">{{$review->answer10_personalrate}}</td>
                                                                
                                                                <td class="text-center"> {{$review->answer10_linemanagerrate}}</td>
                                                                <td class="text-center"> {{$review->answer10_seniormanagerrate}}</td>
                                                                </tr>               
                                                                </tbody>
                                                                </table>
                                                                <table style="margin-bottom: 0rem !important;" class="table table-bordered">
                                                                    
                                                                      <tr>
                                                                        <th style="width: 10% ;inline-text:center" rowspan="3"><b  style="display:block  ; margin-top: 3rem">Comments</b></th>
                                                                        <td style="width: 10%">E</td>
                                                                        <td style="width: 80%">{{$review->answer10_personalcomment}}</td>
                                                                        
                                                                      </tr>
                                                                      <tr>
                                                                        <td>L-M</td>
                                                                        <td>{{$review->answer10_linemanagercomment}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>S-M</td>
                                                                        <td>{{$review->answer10_seniormanagercomment}}</td>
                                                                      </tr>
                                                                  </table>
                                                                  
                    </div>
                    <div class="card mt-5">
                        <div class="card-header text-center px-auto">
                        <h4 class=" text-center mx-auto">LINE MANAGER’S RATING
    
                        </h4>
                        </div>
                        <div class="card-header text-center px-auto">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">Ratings Definition : <span class="mx-3"> 5 = Outstanding  </span> <span class="mx-3"> 4 = Very Good  </span> <span class="mx-3"> 3 = Satisfactory </span> <span class="mx-3"> 2 = Needs Improvement </span> <span class="mx-3"> 1 = Poor </span> </label>
                 
                            </div>
                        
                        
                        <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                        
                        <th>Core Duties  </th>
                        <th>rating</th>
                        
                        </tr>
                        </thead>
                        <tbody>
    
                        <tr data-widget="expandable-table" >
                        <td>1. <b style="color: red">Lead Qualification Accuracy</b> – Does he or she ensure
                            that all leads fall under the criteria given by the client
                            reducing the occurrences of escalations?
                            </td>
                            <td style="width: 10%" class="text-center ">
                                {{$review->linemanager_rating1}} </td>
                        </tr>
                        <tr data-widget="expandable-table" >
                            <td>2. <b style="color: red">Awareness of Internal Processes and Procedures</b>  –
                                Is he or she well-aware of the processes and
                                procedures leading to his or her effective and
                                efficient workflow?
                                
                                </td>
                                <td class="text-center ">
                                    {{$review->linemanager_rating2}}</td>
                            </tr>
                            <tr data-widget="expandable-table" >
                                <td>3. <b style="color: red">Program Timelines Adherence</b> – Does he or she
                                    adhere to program timelines and deadlines in
                                    coordination with stakeholders?
                                    </td>
                                    <td class="text-center ">
                                        {{$review->linemanager_rating2}} </td>
                                </tr>
                                <tr data-widget="expandable-table" >
                                    <td>4. <b style="color: red">Client Feedback Response Time</b>  – Does he or she
                                        answer in a timely manner to client queries and
                                        questions?
                                        </td>
                                        <td class="text-center "> {{$review->linemanager_rating2}} </td>
                                    </tr>
                                    <tr data-widget="expandable-table" >
                                        <td>5. <b style="color: red">Relationship Building</b>  – Does he or she maintain a
                                            positive relationship with internal and external
                                            stakeholders?
                                            
                                            </td>
                                            <td class="text-center "> {{$review->linemanager_rating2}} </td>
                                        </tr>
                        
                        
                        
                            
                               
                       
                        
                        </tbody>
                        </table>
                        
                       
                    
                        
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center px-auto">
                            <h4 class=" text-center mx-auto">SENIOR MANAGER’S EVALUATION
        
                            </h4>
                            </div>
                            <div class="card-header text-center px-auto">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Ratings Definition : <span class="mx-3"> 5 = Outstanding  </span> <span class="mx-3"> 4 = Very Good  </span> <span class="mx-3"> 3 = Satisfactory </span> <span class="mx-3"> 2 = Needs Improvement </span> <span class="mx-3"> 1 = Poor </span> </label>
                     
                                </div>
                            
                            
                            <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                            
                            <th>Core Duties  </th>
                            <th>rating</th>
                            
                            </tr>
                            </thead>
                            <tbody>
        
                            <tr data-widget="expandable-table" >
                            <td>1. <b style="color: red">Accountability</b> – Takes ownership of their
                                deliverables; acknowledges errors or faults
                                </td>
                                <td style="width: 10%" class="text-center ">
                                    {{$review->seniormanager_evaluation1}} </td>
                            </tr>
                            <tr data-widget="expandable-table" >
                                <td>2. <b style="color: red">Collaboration</b>  –
                                    Demonstrates respect for
colleagues and embraces external perspectives
                                    
                                    </td>
                                    <td class="text-center ">
                                        {{$review->seniormanager_evaluation2}}</td>
                                </tr>
                                <tr data-widget="expandable-table" >
                                    <td>3. <b style="color: red">Commitment</b> – Does he or she
                                        – Shows dedication to the company
and has the initiative to complete his/her work and
demonstrates a passion to succeed on his/her role
                                        </td>
                                        <td class="text-center ">
                                            {{$review->seniormanager_evaluation3}} </td>
                                    </tr>
                                    <tr data-widget="expandable-table" >
                                        <td>4. <b style="color: red">Integrity</b>  – Is willing to question the status quo; gives
                                            meaningful and valuable feedback to the team or
                                            the management
                                            </td>
                                            <td class="text-center "> {{$review->seniormanager_evaluation4}} </td>
                                        </tr>
                                        <tr data-widget="expandable-table" >
                                            <td>5. <b style="color: red">Quality</b>  – – Provides outstanding or exceptional service
                                                to clients
                                                
                                                </td>
                                                <td class="text-center "> {{$review->seniormanager_evaluation5}} </td>
                                            </tr>
                            
                            
                            
                                
                                   
                           
                            
                            </tbody>
                            </table>
                            
                           
                        
                            
                            </div>
                            <div class="card mt-5">
                               
                                
                                
                                
                                <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                
                                <th>General Assessment  </th>
                                <th>Enter your written assessment of the employee in the text box below</th>
                                
                                </tr>
                                </thead>
                                <tbody>
            
                                <tr data-widget="expandable-table" >
                                <td>What are the core strengths of the employee and why?
                                    </td>
                                    <td style="" >
                                        {{$review->general_assessment1}} </td>
                                </tr>
                                <tr data-widget="expandable-table" >
                                    <td>What could be improved and why?
                                        
                                        </td>
                                        <td >
                                            {{$review->general_assessment2}}</td>
                                    </tr>
                                    
                                       
                                           
                                
                                
                                
                                    
                                       
                               
                                
                                </tbody>
                                </table>
                                
                               
                            
                                
                                </div>

                               
                              

<div class="row  m-5 ">
  <div class="col-8 border p-4"><h1>Overall Performance Rating </h1></div>
  <div style="background-color: red ; color: white" class="col-4 border  p-4"><h1 class="text-center">
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
</h1></div>
</div>
                                <div class="card mt-5">
                                    <div class="card-header text-center px-auto">
                                    <h4 class=" text-center mx-auto">VERIFICATION OF REVIEW
                
                                    </h4>
                                    </div>
                                    <div class="card-header text-center px-auto">
                                        <label for="inputEmail3" class="col-sm-12 col-form-label">By digitally signing this form, you confirm that you have discussed this review in detail with your line manager and senior-most manager. Signing this form does not necessarily
                                            mean that you agree with this assessment.</label>
                             
                                        </div>
                                    
                                    
                                    <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    
                                    <th style="height: 5rem; padding-bottom: 5rem">Employee’s Signature:   </th>
                                    <th style="height: 5rem; padding-bottom: 5rem">Line Manager’s Signature: </th>
                                    <th style="height: 5rem; padding-bottom: 5rem">Senior Manager’s Signature:
                                    </th>
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                
                                    <tr data-widget="expandable-table" >
                                    <td>Date:
                                        </td>
                                        <td>Date:
                                             </td>
                                             <td>Date:
                                            </td>
                                    </tr>
                                   
                                        
                                            
                                               
                                    
                                    
                                    
                                        
                                           
                                   
                                    
                                    </tbody>
                                    </table>
                                    
                                   
                                
                                    
                                    </div>
                    
<a  title="Print Screen" alt="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;">print</a>
    </div>
    
    
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>

