@extends('home')
@section('content')





<section class="content-header">



    












    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Employee Performance Review Application
    </h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Add Review</li>
    </ol>
    </div>
    </div>
    </div>
    </section>
    
    <section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Feel the List bellow and Submit it</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/performancereview/{{ $review->id }}" method="post" class="form-horizontal" id="reaviewform">
                @csrf
                @method('PUT')
              <div class="card-body">
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Name</label>
                    <div class="col-sm-5">
                      <input type="text" name="name" value="{{ $review->name }}" class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Review Period</label>
                    <div class="col-sm-5">
                      <input type="text" name="review_period" value="{{ $review->review_period }}" class="form-control" id="inputEmail3" readonly placeholder="Enter Review Period">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Reviewer</label>
                    <div class="col-sm-5">
                      <input type="text" name="reviewer" class="form-control" id="inputEmail3" placeholder="Reviewer" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Job Title </label>
                    <div class="col-sm-5">
                        <input type="text" name="job_title" class="form-control" id="inputEmail3" placeholder="Reviewer" readonly>     </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Team name </label>
                    <div class="col-sm-5">
                        <input type="text" name="group_name" class="form-control" id="inputEmail3" placeholder="Reviewer" readonly>   </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Date of Review</label>
                    <div class="col-sm-5">
                      <input type="date" name="date_of_review" class="form-control" id="inputPassword3" readonly placeholder="Password">
                    </div>
                  </div>
                  <hr>
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
<h3 class="mt-5">GOALS AND OBJECTIVES</h3>
<label for="inputEmail3" class="col-sm-9 col-form-label">List a minimum of three goals/objectives for the next 12 months. </label>

<div class="form-group row">
    <label for="inputEmail3" class=" col-form-label">1.</label>
    <div class="col-sm-8">
        <input type="text" name="goal1" class="form-control" id="inputEmail3" placeholder="Write your goals/objectives here ....">
      </div>
      <div class="col-sm-3">
        <input type="text" name="achievedornot1"  class="form-control" id="inputEmail3" readonly placeholder="Enter Review Period">
    </div>
          
  
  </div>
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
    <div class="col-sm-8">
    <textarea type="text" name="goal1comment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
    </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class=" col-form-label">2.</label>
        <div class="col-sm-8">
            <input type="text" name="goal2" class="form-control" id="inputEmail3" placeholder="Write your goals/objectives here ....">
          </div>
          <div class="col-sm-3">
            <input type="text" name="achievedornot2"  class="form-control" id="inputEmail3" readonly placeholder="Enter Review Period">
        </div>
              
      
      </div>
      
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
        <div class="col-sm-8">
        <textarea type="text" name="goal2comment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
        </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class=" col-form-label">3.</label>
            <div class="col-sm-8">
                <input type="text" name="goal3" class="form-control" id="inputEmail3" placeholder="Write your goals/objectives here ....">
              </div>
              <div class="col-sm-3">
                <input type="text" name="achievedornot3"  class="form-control" id="inputEmail3" readonly placeholder="Enter Review Period">
            </div>
                  
          
          </div>
          
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
            <div class="col-sm-8">
            <textarea type="text" name="goal3comment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
            </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class=" col-form-label">4.</label>
                <div class="col-sm-8">
                    <input type="text" name="goal4" class="form-control" id="inputEmail3" placeholder="Write your goals/objectives here ....">
                  </div>
                  <div class="col-sm-3">
                    <input type="text" name="achievedornot4"  class="form-control" id="inputEmail3" readonly placeholder="Enter Review Period">
                </div>
                      
              
              </div>
              
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                <div class="col-sm-8">
                <textarea type="text" name="goal4comment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class=" col-form-label">5.</label>
                    <div class="col-sm-8">
                        <input type="text" name="goal5" class="form-control" id="inputEmail3" placeholder="Write your goals/objectives here ....">
                      </div>
                      <div class="col-sm-3">
                        <input type="text" name="achievedornot5"  class="form-control" id="inputEmail3" readonly placeholder="Enter Review Period">
                    </div>
                          
                  
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-8">
                    <textarea type="text" name="goal5comment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                      <hr>
                      <h3 class="mt-5">GOALS AND OBJECTIVES</h3>
                      <label for="inputEmail3" class="col-sm-9 col-form-label">Ratings Definition : <span class="mx-3"> 5 = Always </span> <span class="mx-3"> 4 = Often </span> <span class="mx-3"> 3 = Sometimes </span> <span class="mx-3"> 2 = Occasionally </span> <span class="mx-3"> 1 = Never </span> </label>
                <hr>
                      <div class="form-group row">

                  <label for="inputEmail3" class="col-sm-9 col-form-label">1. Sets an example for high-quality work among his or answer1_personalrate
                    her co-workers </label>
                    <div class="col-sm-2">
                        <input type="text" name="answer1_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                      </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer1_personalcomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                 </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer1_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_seniormanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_seniormanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_seniormanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_seniormanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1_seniormanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer1_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                    </div>
                <hr>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">2. Consistently produces thorough and error-free work </label>
                    <div class="col-sm-3">
                        <input type="text" name="answer2_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer2_personalcomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer2_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer2_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer2_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer2_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer2_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer2_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer2_seniormanagerrate" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer2_seniormanagerrate" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer2_seniormanagerrate" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer2_seniormanagerrate" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer2_seniormanagerrate" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                            <div class="col-sm-10">
                            <textarea type="text" name="answer2_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                            </div>
                        </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">3. Encourages and assists others in enhancing the
                        quality of their work  </label>
                        <div class="col-sm-3">
                            <input type="text" name="answer3_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text"  name="answer3_personalcomment" readonly cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer3_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer3_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer3_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer3_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer3_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer3_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer3_seniormanagerrate" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer3_seniormanagerrate" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer3_seniormanagerrate" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer3_seniormanagerrate" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer3_seniormanagerrate" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                            <div class="col-sm-10">
                            <textarea type="text" name="answer3_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                            </div>
                        </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">4. Is adept at providing and receiving feedback
                        constructively </label>
                        <div class="col-sm-3">
                            <input type="text" name="answer4_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer4_personalcomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer4_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer4_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer4_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer4_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer4_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer4_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer4_seniormanagerrate" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer4_seniormanagerrate" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer4_seniormanagerrate" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer4_seniormanagerrate" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer4_seniormanagerrate" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                            <div class="col-sm-10">
                            <textarea type="text" name="answer4_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                            </div>
                        </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">5. Communicates clearly and effectively, both verbally
                        and in writing </label>
                        <div class="col-sm-3">
                            <input type="text" name="answer5_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer5_personalcomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer5_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer5_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer5_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer5_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer5_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer5_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer5_seniormanagerrate" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer5_seniormanagerrate" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer5_seniormanagerrate" id="inlineRadio2" value="3">
                            <label class="form-check-label" for="inlineRadio2">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer5_seniormanagerrate" id="inlineRadio2" value="4">
                            <label class="form-check-label" for="inlineRadio2">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer5_seniormanagerrate" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio2">5</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer5_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">6. Contributes positively to team goals, initiatives, and
                        morale </label>
                        <div class="col-sm-3">
                            <input type="text" name="answer6_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer6_personalcomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer6_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer6_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer6_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer6_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer6_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer6_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer6_seniormanagerrate" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer6_seniormanagerrate" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer6_seniormanagerrate" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer6_seniormanagerrate" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer6_seniormanagerrate" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                            <div class="col-sm-10">
                            <textarea type="text" name="answer6_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                            </div>
                        </div>
                  <hr>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">7. Can be relied upon to complete tasks accurately
                    </label>
                    <div class="col-sm-3">
                        <input type="text" name="answer7_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer7_personalcomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer7_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer7_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer7_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer7_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer7_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer7_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer7_seniormanagerrate" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer7_seniormanagerrate" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer7_seniormanagerrate" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer7_seniormanagerrate" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer7_seniormanagerrate" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                            <div class="col-sm-10">
                            <textarea type="text" name="answer7_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                            </div>
                        </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">8. Punctually reports for work and provides advance
                        notice of any anticipated absences
                         </label>
                         <div class="col-sm-3">
                            <input type="text" name="answer8_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer8_personalcomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer8_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer8_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer8_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer8_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer8_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer8_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer8_seniormanagerrate" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer8_seniormanagerrate" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer8_seniormanagerrate" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer8_seniormanagerrate" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer8_seniormanagerrate" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                            <div class="col-sm-10">
                            <textarea type="text" name="answer8_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                            </div>
                        </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">9. Takes instructions and or directions with good
                        judgment and follows leaders effectively
                         </label>
                         <div class="col-sm-3">
                            <input type="text" name="answer9_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer9_personalcomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer9_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer9_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer9_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer9_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer9_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer9_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer9_seniormanagerrate" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer9_seniormanagerrate" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer9_seniormanagerrate" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer9_seniormanagerrate" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer9_seniormanagerrate" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                            <div class="col-sm-10">
                            <textarea type="text" name="answer9_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                            </div>
                        </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">10. Plays a consistent role in elevating existing standards
                        for our development and achievements </label>
                        <div class="col-sm-3">
                            <input type="text" name="answer10_personalrate"  class="form-control" id="inputEmail3" placeholder="Full name here" readonly>
                    
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="answer10_personalcomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer10_linemanagerrate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer10_linemanagerrate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer10_linemanagerrate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer10_linemanagerrate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer10_linemanagerrate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line Manager Comment</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="answer10_linemanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-9 col-form-label"> </label>
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer10_seniormanagerrate" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer10_seniormanagerrate" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer10_seniormanagerrate" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer10_seniormanagerrate" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer10_seniormanagerrate" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senior Manager Comment</label>
                            <div class="col-sm-10">
                            <textarea type="text" name="answer10_seniormanagercomment" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                            </div>
                        </div>
                  <hr>
                  {{-- <div class="row">
                    <div class="col-12">
                    <div class="card">
                    <div class="card-header text-center px-auto">
                    <h4 class=" text-center mx-auto">LINE MANAGER’S RATING

                    </h4>
                    </div>
                    <div class="card-header text-center px-auto">
                        <label for="inputEmail3" class="col-sm-9 col-form-label">Ratings Definition : <span class="mx-3"> 5 = Outstanding  </span> <span class="mx-3"> 4 = Very Good  </span> <span class="mx-3"> 3 = Satisfactory </span> <span class="mx-3"> 2 = Needs Improvement </span> <span class="mx-3"> 1 = Poor </span> </label>
             
                        </div>
                    
                    <div class="card-body">
                    <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                    
                    <th>Core Duties  </th>
                    <th>rating</th>
                    
                    </tr>
                    </thead>
                    <tbody>

                    <tr data-widget="expandable-table" >
                    <td><b style="color: red">Lead Qualification Accuracy</b> – Does he or she ensure
                        that all leads fall under the criteria given by the client
                        reducing the occurrences of escalations?
                        </td>
                        <td class="w-25"><div class="w-100 col-sm-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                            </div>
                        </div> </td>
                    </tr>
                    
                    
                    
                        
                           
                   
                    
                    </tbody>
                    </table>
                    </div>
                   
                
                    
                    </div>
                    
                    </div>
                    </div> --}}
                    <div class="row">
                    <div class="col-12">
                    <div class="card">
                    <div class="card-header text-center px-auto">
                    <h4 class=" text-center mx-auto">LINE MANAGER’S RATING

                    </h4>
                    </div>
                    <div class="card-header text-center px-auto">
                        <label for="inputEmail3" class="col-sm-9 col-form-label">Ratings Definition : <span class="mx-3"> 5 = Outstanding  </span> <span class="mx-3"> 4 = Very Good  </span> <span class="mx-3"> 3 = Satisfactory </span> <span class="mx-3"> 2 = Needs Improvement </span> <span class="mx-3"> 1 = Poor </span> </label>
             
                        </div>
                    
                    <div class="card-body">
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
                        <td class="w-25"><div class="w-100 col-sm-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="linemanager_rating1" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                            </div>
                        </div> </td>
                    </tr>
                    <tr data-widget="expandable-table" >
                        <td>2. <b style="color: red">Awareness of Internal Processes and Procedures</b>  –
                            Is he or she well-aware of the processes and
                            procedures leading to his or her effective and
                            efficient workflow?
                            
                            </td>
                            <td class="w-25"><div class="w-100 col-sm-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="linemanager_rating2" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="linemanager_rating2" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="linemanager_rating2" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="linemanager_rating2" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="linemanager_rating2" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div> </td>
                        </tr>
                        <tr data-widget="expandable-table" >
                            <td>3. <b style="color: red">Program Timelines Adherence</b> – Does he or she
                                adhere to program timelines and deadlines in
                                coordination with stakeholders?
                                </td>
                                <td class="w-25"><div class="w-100 col-sm-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="linemanager_rating3" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="linemanager_rating3" id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="linemanager_rating3" id="inlineRadio2" value="3">
                                        <label class="form-check-label" for="inlineRadio2">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="linemanager_rating3" id="inlineRadio2" value="4">
                                        <label class="form-check-label" for="inlineRadio2">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="linemanager_rating3" id="inlineRadio2" value="5">
                                        <label class="form-check-label" for="inlineRadio2">5</label>
                                    </div>
                                </div> </td>
                            </tr>
                            <tr data-widget="expandable-table" >
                                <td>4. <b style="color: red">Client Feedback Response Time</b>  – Does he or she
                                    answer in a timely manner to client queries and
                                    questions?
                                    </td>
                                    <td class="w-25"><div class="w-100 col-sm-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="linemanager_rating4" id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="linemanager_rating4" id="inlineRadio2" value="2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="linemanager_rating4" id="inlineRadio2" value="3">
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="linemanager_rating4" id="inlineRadio2" value="4">
                                            <label class="form-check-label" for="inlineRadio2">4</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="linemanager_rating4" id="inlineRadio2" value="5">
                                            <label class="form-check-label" for="inlineRadio2">5</label>
                                        </div>
                                    </div> </td>
                                </tr>
                                <tr data-widget="expandable-table" >
                                    <td>5. <b style="color: red">Relationship Building</b>  – Does he or she maintain a
                                        positive relationship with internal and external
                                        stakeholders?
                                        
                                        </td>
                                        <td class="w-25"><div class="w-100 col-sm-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="linemanager_rating5" id="inlineRadio1" value="1">
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="linemanager_rating5" id="inlineRadio2" value="2">
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="linemanager_rating5" id="inlineRadio2" value="3">
                                                <label class="form-check-label" for="inlineRadio2">3</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="linemanager_rating5" id="inlineRadio2" value="4">
                                                <label class="form-check-label" for="inlineRadio2">4</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="linemanager_rating5" id="inlineRadio2" value="5">
                                                <label class="form-check-label" for="inlineRadio2">5</label>
                                            </div>
                                        </div> </td>
                                    </tr>
                    
                    
                    
                        
                           
                   
                    
                    </tbody>
                    </table>
                    </div>
                   
                
                    
                    </div>
                    
                    </div>
                    </div>
                
                
              </div>
              <div class="row">
                <div class="col-12">
                <div class="card">
                <div class="card-header text-center px-auto">
                <h4 class=" text-center mx-auto">SENIOR MANAGER’S EVALUATION


                </h4>
                </div>
                <div class="card-header text-center px-auto">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">Ratings Definition : <span class="mx-3"> 5 = Outstanding  </span> <span class="mx-3"> 4 = Very Good  </span> <span class="mx-3"> 3 = Satisfactory </span> <span class="mx-3"> 2 = Needs Improvement </span> <span class="mx-3"> 1 = Poor </span> </label>
         
                    </div>
                
                <div class="card-body">
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
                    <td class="w-25"><div class="w-100 col-sm-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="seniormanager_evaluation1" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="seniormanager_evaluation1" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="seniormanager_evaluation1" id="inlineRadio2" value="3">
                            <label class="form-check-label" for="inlineRadio2">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="seniormanager_evaluation1" id="inlineRadio2" value="4">
                            <label class="form-check-label" for="inlineRadio2">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="seniormanager_evaluation1" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio2">5</label>
                        </div>
                    </div> </td>
                </tr>
                <tr data-widget="expandable-table" >
                    <td>2. <b style="color: red">Collaboration</b>  –
                        Demonstrates respect for
colleagues and embraces external perspectives
                        
                        </td>
                        <td class="w-25"><div class="w-100 col-sm-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="seniormanager_evaluation2" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="seniormanager_evaluation2" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="seniormanager_evaluation2" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="seniormanager_evaluation2" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="seniormanager_evaluation2" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                            </div>
                        </div> </td>
                    </tr>
                    <tr data-widget="expandable-table" >
                        <td>3. <b style="color: red">Commitment</b> – Shows dedication to the company
                            and has the initiative to complete his/her work and
                            demonstrates a passion to succeed on his/her role
                            </td>
                            <td class="w-25"><div class="w-100 col-sm-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="seniormanager_evaluation3" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="seniormanager_evaluation3" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="seniormanager_evaluation3" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="seniormanager_evaluation3" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="seniormanager_evaluation3" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                </div>
                            </div> </td>
                        </tr>
                        <tr data-widget="expandable-table" >
                            <td>4. <b style="color: red"> Integrity</b>  – Is willing to question the status quo; gives
                                meaningful and valuable feedback to the team or
                                the management
                                
                                </td>
                                <td class="w-25"><div class="w-100 col-sm-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="seniormanager_evaluation4" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="seniormanager_evaluation4" id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="seniormanager_evaluation4" id="inlineRadio2" value="3">
                                        <label class="form-check-label" for="inlineRadio2">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="seniormanager_evaluation4" id="inlineRadio2" value="4">
                                        <label class="form-check-label" for="inlineRadio2">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="seniormanager_evaluation4" id="inlineRadio2" value="5">
                                        <label class="form-check-label" for="inlineRadio2">5</label>
                                    </div>
                                </div> </td>
                            </tr>
                            <tr data-widget="expandable-table" >
                                <td>5. <b style="color: red">Quality</b>  – Provides outstanding or exceptional service
                                    to clients
                                    
                                    </td>
                                    <td class="w-25"><div class="w-100 col-sm-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="seniormanager_evaluation5" id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="seniormanager_evaluation5" id="inlineRadio2" value="2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="seniormanager_evaluation5" id="inlineRadio2" value="3">
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="seniormanager_evaluation5" id="inlineRadio2" value="4">
                                            <label class="form-check-label" for="inlineRadio2">4</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="seniormanager_evaluation5" id="inlineRadio2" value="5">
                                            <label class="form-check-label" for="inlineRadio2">5</label>
                                        </div>
                                    </div> </td>
                                </tr>
                
                
                
                    
                       
               
                
                </tbody>
                </table>
                </div>
               
            
                
                </div>
                
                </div>
                </div>
                <div class="card-header text-center px-auto">
                    <h4 class=" text-center mx-auto">General Assessment
    
    
                    </h4>
                    <hr>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-9 text-left col-form-label">What are the core strengths of the employee and why?
                             </label> 
                        <div class="col-sm-10">
                        <textarea type="text" name="general_assessment1" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-9 text-left col-form-label">What could be improved and why?
                            </label>
                            <div class="col-sm-10">
                            <textarea type="text" name="general_assessment2" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                            </div>
                            </div>
                    </div>
                    
            
            
          </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="submit"  class="btn btn-default float-right">Cancel</a>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
    
</div>
</section>
<script>
    // Define the review object with values for each input field
    var review = {
        review_period: "{{$review->review_period}}",
            reviewer: "{{$review->reviewer}}",
            job_title: "{{$review->job_title}}",
            date_of_review: "{{$review->date_of_review}}",
            group_name: "{{$review->group_name}}",
            goal1: "{{$review->goal1}}",
            goal2: "{{$review->goal2}}",
            goal3: "{{$review->goal3}}",
            goal4: "{{$review->goal4}}",
            goal5: "{{$review->goal5}}",
            achievedornot1: "{{$review->achievedornot1}}",
            achievedornot2: "{{$review->achievedornot2}}",
            achievedornot3: "{{$review->achievedornot3}}",
            achievedornot4: "{{$review->achievedornot4}}",
            achievedornot5: "{{$review->achievedornot5}}",
            goal1comment: "{{$review->goal1comment}}",
            goal2comment: "{{$review->goal2comment}}",
            goal3comment: "{{$review->goal3comment}}",
            goal4comment: "{{$review->goal4comment}}",
            goal5comment: "{{$review->goal5comment}}",
            answer1_personalrate: "{{$review->answer1_personalrate}}",
            answer2_personalrate: "{{$review->answer2_personalrate}}",
            answer3_personalrate: "{{$review->answer3_personalrate}}",
            answer4_personalrate: "{{$review->answer4_personalrate}}",
            answer5_personalrate: "{{$review->answer5_personalrate}}",
            answer6_personalrate: "{{$review->answer6_personalrate}}",
            answer7_personalrate: "{{$review->answer7_personalrate}}",
            answer8_personalrate: "{{$review->answer8_personalrate}}",
            answer9_personalrate: "{{$review->answer9_personalrate}}",
            answer10_personalrate: "{{$review->answer10_personalrate}}",
            answer1_personalcomment: "{{$review->answer1_personalcomment}}",
            answer2_personalcomment: "{{$review->answer2_personalcomment}}",
            answer3_personalcomment: "{{$review->answer3_personalcomment}}",
            answer4_personalcomment: "{{$review->answer4_personalcomment}}",
            answer5_personalcomment: "{{$review->answer5_personalcomment}}",
            answer6_personalcomment: "{{$review->answer6_personalcomment}}",
            answer7_personalcomment: "{{$review->answer7_personalcomment}}",
            answer8_personalcomment: "{{$review->answer8_personalcomment}}",
            answer9_personalcomment: "{{$review->answer9_personalcomment}}",
            answer10_personalcomment: "{{$review->answer10_personalcomment}}",

            answer1_seniormanagerrate: "{{$review->answer1_seniormanagerrate}}",
            answer2_seniormanagerrate: "{{$review->answer2_seniormanagerrate}}",
            answer3_seniormanagerrate: "{{$review->answer3_seniormanagerrate}}",
            answer4_seniormanagerrate: "{{$review->answer4_seniormanagerrate}}",
            answer5_seniormanagerrate: "{{$review->answer5_seniormanagerrate}}",
            answer6_seniormanagerrate: "{{$review->answer6_seniormanagerrate}}",
            answer7_seniormanagerrate: "{{$review->answer7_seniormanagerrate}}",
            answer8_seniormanagerrate: "{{$review->answer8_seniormanagerrate}}",
            answer9_seniormanagerrate: "{{$review->answer9_seniormanagerrate}}",
            answer10_seniormanagerrate: "{{$review->answer10_seniormanagerrate}}",
            answer1_seniormanagercomment: "{{$review->answer1_seniormanagercomment}}",
            answer2_seniormanagercomment: "{{$review->answer2_seniormanagercomment}}",
            answer3_seniormanagercomment: "{{$review->answer3_seniormanagercomment}}",
            answer4_seniormanagercomment: "{{$review->answer4_seniormanagercomment}}",
            answer5_seniormanagercomment: "{{$review->answer5_seniormanagercomment}}",
            answer6_seniormanagercomment: "{{$review->answer6_seniormanagercomment}}",
            answer7_seniormanagercomment: "{{$review->answer7_seniormanagercomment}}",
            answer8_seniormanagercomment: "{{$review->answer8_seniormanagercomment}}",
            answer9_seniormanagercomment: "{{$review->answer9_seniormanagercomment}}",
            answer10_seniormanagercomment: "{{$review->answer10_seniormanagercomment}}",

            answer1_linemanagerrate: "{{$review->answer1_linemanagerrate}}",
            answer2_linemanagerrate: "{{$review->answer2_linemanagerrate}}",
            answer3_linemanagerrate: "{{$review->answer3_linemanagerrate}}",
            answer4_linemanagerrate: "{{$review->answer4_linemanagerrate}}",
            answer5_linemanagerrate: "{{$review->answer5_linemanagerrate}}",
            answer6_linemanagerrate: "{{$review->answer6_linemanagerrate}}",
            answer7_linemanagerrate: "{{$review->answer7_linemanagerrate}}",
            answer8_linemanagerrate: "{{$review->answer8_linemanagerrate}}",
            answer9_linemanagerrate: "{{$review->answer9_linemanagerrate}}",
            answer10_linemanagerrate: "{{$review->answer10_linemanagerrate}}",
            answer1_linemanagercomment: "{{$review->answer1_linemanagercomment}}",
            answer2_linemanagercomment: "{{$review->answer2_linemanagercomment}}",
            answer3_linemanagercomment: "{{$review->answer3_linemanagercomment}}",
            answer4_linemanagercomment: "{{$review->answer4_linemanagercomment}}",
            answer5_linemanagercomment: "{{$review->answer5_linemanagercomment}}",
            answer6_linemanagercomment: "{{$review->answer6_linemanagercomment}}",
            answer7_linemanagercomment: "{{$review->answer7_linemanagercomment}}",
            answer8_linemanagercomment: "{{$review->answer8_linemanagercomment}}",
            answer9_linemanagercomment: "{{$review->answer9_linemanagercomment}}",
            answer10_linemanagercomment: "{{$review->answer10_linemanagercomment}}",
       
    };
   

    // Get all input elements within the form with id "myForm"
    var form = document.getElementById("reaviewform");
    var inputs = form.querySelectorAll("input , label , textarea");
    var readonlyElementNames = [
    "review_period", "reviewer", "job_title", "date_of_review", "group_name",
    "answer1_personalrate", "answer2_personalrate", "answer3_personalrate", "answer4_personalrate", "answer5_personalrate",
    "answer6_personalrate", "answer7_personalrate", "answer8_personalrate", "answer9_personalrate", "answer10_personalrate",
    "answer1_personalcomment", "answer2_personalcomment", "answer3_personalcomment", "answer4_personalcomment", "answer5_personalcomment",
    "answer6_personalcomment", "answer7_personalcomment", "answer8_personalcomment", "answer9_personalcomment", "answer10_personalcomment"
];

// Loop through the elements and make the ones with specified names readonly
for (var i = 0; i < readonlyElementNames.length; i++) {
    var name = readonlyElementNames[i];
    var element = form.querySelector('[name="' + name + '"]');

    if (element) {
        element.readOnly = true;
    }
}

    // Loop through the input elements
    for (var i = 0; i < inputs.length; i++) {
        // Check if the input's name matches a key in the review object
        if (review.hasOwnProperty(inputs[i].name)) {
            inputs[i].value = review[inputs[i].name];
        }
    }

    
</script>


@endsection
