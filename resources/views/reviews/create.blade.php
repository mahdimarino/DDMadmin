@extends('staffhome')
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
              <h3 class="card-title">Enter The New Info</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Name</label>
                    <div class="col-sm-5">
                      <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Full name here">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Review Period</label>
                    <div class="col-sm-5">
                      <input type="text" name="phone_number" class="form-control" id="inputEmail3" placeholder="Enter Review Period">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Reviewer</label>
                    <div class="col-sm-5">
                      <input type="text" name="job_title" class="form-control" id="inputEmail3" placeholder="Reviewer">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Job Title </label>
                    <div class="col-sm-5">
                        <select name="group_name" class="form-control" required>
                            <option value="" disabled selected>Select Job Title</option>
                            <option value="Group 1">Group 1</option>
                            <option value="Group 2">Group 2</option>
                            <option value="Group 3">Group 3</option>
                        </select>     </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Team name </label>
                    <div class="col-sm-5">
                        <select name="group_name" class="form-control" required>
                            <option value="" disabled selected>Select Team name</option>
                            <option value="Group 1">Group 1</option>
                            <option value="Group 2">Group 2</option>
                            <option value="Group 3">Group 3</option>
                        </select>     </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Date of Review</label>
                    <div class="col-sm-5">
                      <input type="text" name="Date of Review" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Expandable Table</h3>
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
                <div class="form-group row">

                  <label for="inputEmail3" class="col-sm-9 col-form-label">1. Sets an example for high-quality work among his or
                    her co-workers </label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                            <label class="form-check-label" for="inlineRadio2">3</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                            <label class="form-check-label" for="inlineRadio2">4</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio2">5</label>
                          </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                <hr>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">2. Consistently produces thorough and error-free work </label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                            <label class="form-check-label" for="inlineRadio2">3</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                            <label class="form-check-label" for="inlineRadio2">4</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio2">5</label>
                          </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">3. Encourages and assists others in enhancing the
                        quality of their work  </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">4. Is adept at providing and receiving feedback
                        constructively </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">5. Communicates clearly and effectively, both verbally
                        and in writing </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">6. Contributes positively to team goals, initiatives, and
                        morale </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                  <hr>1
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">7. Can be relied upon to complete tasks accurately
                    </label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                            <label class="form-check-label" for="inlineRadio2">3</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                            <label class="form-check-label" for="inlineRadio2">4</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio2">5</label>
                          </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">8. Punctually reports for work and provides advance
                        notice of any anticipated absences
                         </label>
                         <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">9. Takes instructions and or directions with good
                        judgment and follows leaders effectively
                         </label>
                         <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-9 col-form-label">10. Plays a consistent role in elevating existing standards
                        for our development and achievements </label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="content" cols="3" rows="3" class="form-control"  placeholder="Write your comment here ..."></textarea>
                    </div>
                    </div>
                  <hr>
                
                
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


@endsection