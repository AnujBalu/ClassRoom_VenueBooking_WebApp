
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title bg-primary p-3" style="border-radius:15px; color:whitesmoke;">Info Search</h4>
                  <form class="form-sample">
                    <p class="card-description">
      
                    </p>
                    <div class="row">
                      
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Faculty ID</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="EX : CT12345" />
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group row">
                            <label for="yr" class="col-sm-3 form-label">Year</label>                          
                            <div class="col-sm-9">
                              <input class="form-control" list="datalistOptions2" id="yr" placeholder="Year">
                              <datalist id="datalistOptions2">
                              <option value="" disabled selected hidden>Year</option>
                              <option>UG - I</option>
                              <option>UG - II</option>
                              <option>UG - III</option>
                              <option>UG - IV</option>
                              <option>PG - I</option>
                              <option>PG - II</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                            <label for="dept" class="col-sm-3 form-label">Department</label>                          
                            <div class="col-sm-9">
                              <input class="form-control" list="datalistOptions" id="dept" placeholder="Department">
                              <datalist id="datalistOptions">
                              
                        
                                 <option>AERONAUTICAL ENGINEERING</option>
                                 <option>ARTIFICIAL INTELLIGENCE AND DATA SCIENCE</option>
                                 <option>AUTOMOBILE ENGINEERING</option>
                                 <option>BIOTECHNOLOGY</option>
                                 <option>CIVIL ENGINEERING</option>
                                 <option>COMPUTER SCIENCE AND DESIGN</option>
                                 <option>COMPUTER TECHNOLOGY</option>
                                 <option> ELECTRONICS AND COMMUNICATION ENGINEERING</option>
                                 <option>FASHION TECHNOLOGY</option>
                                 <option>INFORMATION TECHNOLOGY</option>
                                 <option>MECHANICAL ENGINEERING</option>
                                 <option> MECHATRONICS</option>
                                 <option>AGRICULTURAL ENGINEERING</option>
                                 <option>ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING</option>
                                 <option>BIOMEDICAL ENGINEERING</option>
                                 <option>COMPUTER SCIENCE AND BUSINESS SYSTEMS</option>
                                 <option>COMPUTER SCIENCE AND ENGINEERING</option>
                                 <option>ELECTRICAL AND ELECTRONICS ENGINEERING</option>
                                 <option>ELECTRONICS AND INSTRUMENTATION ENGINEERING</option>
                                 <option>FOOD TECHNOLOGY</option>
                                 <option>INFORMATION SCIENCE AND ENGINEERING</option>
                                 <option>TEXTILE TECHNOLOGY</option>
                                 <option>MATHEMATICS</option>
                                 <option>PHYSICS</option>
                                 <option>CHEMISTRY</option>
                                 <option>TRAINING & PLACEMENT</option>
                                 <option>HUMANITIES</option>
                                 <option>PHYSICAL EDUCATION</option>
                                 <option> YOGA</option>
                                 <option>OTHERS</option>
         
                            </datalist>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      
                      <div class="col-md-4">
                        <div class="form-group row">
                            <label for="event_id" class="col-sm-3 form-label">Department</label>                          
                            <div class="col-sm-9">
                                <input class="form-control" list="datalistOptions1" id="event_id" placeholder="Event">
                                <datalist id="datalistOptions1">
                                    <option value="" disabled selected hidden>Events</option>
                                    <option>Academics</option>
                                    <option>Interview</option>
                                    <option>Mentor Meeting</option>
                                    <option>Club Event</option>
                                    <option>Seminar</option>
                                    <option>Workshop</option> 
                                    <option>School Training</option>
                                    <option>Others</option>
                                </datalist>
                            </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Venue</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="EX : CT23" />
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="Date" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary ml-auto" >search</button>

                    
                    </div>
                  </form>
                </div>
              </div>
            </div>            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Recent booking</p>
                  <div class="table-responsive">
                    <div class="table table-hover">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Staff Name</th>
                          <th>Staff Id</th>
                          <th>Event</th>
                          <th>Date</th>
                          <th>Duration</th>
                          <th>Status</th>
                
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>Mohan</td>
                          <td>7376101</td>
                          <td class="font-weight-bold">Academic</td>
                          <td>21 Sep 2018</td>
                          <td>2hr</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Booked</div></td>
                        </tr>
                        <tr>
                          <td>Kumar</td>
                          <td>7376102</td>
                          <td class="font-weight-bold">Academic</td>
                          <td>13 Jun 2018</td>
                          <td>3hr</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Booked</div></td>
                        </tr>
                        <tr>
                          <td>prasath</td>
                          <td>7376111</td>
                          <td class="font-weight-bold">Academic</td>
                          <td>28 Sep 2018</td>
                          <td>4hr</td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                          <td>kanth</td>
                          <td>7376134</td>
                          <td class="font-weight-bold">Academic</td>
                          <td>30 Jun 2018</td>
                          <td>1.5hr</td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                          <td>sri</td>
                          <td>7376122</td>
                          <td class="font-weight-bold">Academic</td>
                          <td>01 Nov 2018</td>
                          <td>2hr</td>
                          <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                        </tr>
                        <tr>
                          <td>Anuj</td>
                          <td>7376201</td>
                          <td class="font-weight-bold">Academic</td>
                          <td>20 Mar 2018</td>
                          <td>6hr</td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                          <td>sankar</td>
                          <td>7376164</td>
                          <td class="font-weight-bold">Academic</td>
                          <td>26 Oct 2018</td>
                          <td>24hr</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Booked</div></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    
  </div>

