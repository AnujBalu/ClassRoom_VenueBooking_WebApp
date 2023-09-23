<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title p-3 mb-2 bg-primary text-white rounded" >Venue Form</h4>
                  <form class="form-sample" method="post" action="<?php echo base_url(); ?>inserting_data">
                    <p class="card-description">
      
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" placeholder="EX : SRI M AP/CT"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group row">
                          <label for="year" class="col-sm-3 form-label">Year</label>
                          <div class="col-sm-9">
                              <input class="form-control" name="year" list="datalistOptions3" id="year" placeholder="Year">
                            <datalist id="datalistOptions3">
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
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group row">
                          <label for="Cap" class="col-sm-3 form-label">Departments</label>
                          <div class="col-sm-9">
                              <input class="form-control" name="dept" list="datalistOptions2" id="Cap" placeholder="Department">
                            <datalist id="datalistOptions2">
                              <option value="" disabled selected hidden>Department</option>
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
                                 <option id= "he" onclick="text()">OTHERS</option>
                              
                            </datalist>
                          </div>
                        </div>
                      </div>

                    
                    
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="dept" class="col-sm-3 form-label">Capacity</label>                          
                          <div class="col-sm-9">
                            <input class="form-control" name="capacity" list="datalistOptions" id="dept" placeholder="Capacity">
                            <datalist id="datalistOptions">
                            <option value="" disabled selected hidden>Capacity</option>
                              <option>10</option>
                              <option>13</option>
                              <option>15</option>
                              <option>30</option>
                              <option>40</option>
                              <option>60</option>
                              <option>72+15(chairs)</option>
                              <option>120</option>
                              <option>180</option>
                              <option>200</option>
                              <option>300</option>
                              <option>700</option>
                              <option>1800</option>
                                 
         
                            </datalist>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-md-6">
                         <div class="form-group row">
                           <label for="event_id" class="col-sm-3 form-label">Events</label>
                           <div class="col-sm-9">
                              <input class="form-control" name="event" list="datalistOptions1" id="event_id" onchange="change(this.value)" placeholder="Events">
                             <datalist id="datalistOptions1">
                              <option>Academics</option>
                              <option>Interview</option>
                              <option>Mentor Meeting</option>
                              <option>Club Event</option>
                              <option>Seminar</option>
                              <option>Workshop</option> 
                              <option>School Training</option>
                              <option>Conference</option>
                              <option id="others">Others</option>
                            </datalist>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6" id="new_other" style="display:none" >
                        <div class="form-group row"  >
                          <label class="col-sm-3 col-form-label" >Event Name</label>
                          <div class="col-sm-9" >
                            <input type="text" name="others_option" class="form-control bod" placeholder="Event Name"   />
                          </div>
                        </div>
                    </div>
                    
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Venue</label>
                          <div class="col-sm-9">
                            <input type="text" name="venue" class="form-control" placeholder="EX : CT23" />
                          </div>
                        </div>
                      </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Duration<br>(in hrs)</label>
                          <div class="col-sm-9">
                            <input type="number" name="duration" class="form-control" />
                          </div>
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="Date" name="date" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">From Time</label>
                          <div class="col-sm-9">
                            <input type="time" name="f_time" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">To Time</label>
                          <div class="col-sm-9">
                            <input type="time" name="t_time" class="form-control" />
                          </div>
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Projecter and Speakers</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="projector" class="form-check-input" name="projector" id="projector" value="YES"  >
                                Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="projector" id="projector" value="NO" >
                                No
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">WIFI</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="wifi" class="form-check-input" name="wifi" id="wifi" value="YES" >
                                Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="wifi" id="wifi" value="NO" >
                                No
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                    
                   
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Systems</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="systems" class="form-check-input" id="sysRadio1" value="YES"  onclick="text()">
                                Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="systems" id="sysRadio2" value="NO" onclick="text()">
                                No
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6" id="sri" style="display:none" >
                        <div class="form-group row"  >
                          <label class="col-sm-3 col-form-label" >No.of systems</label>
                          <div class="col-sm-9" >
                            <input type="number" name="no_of_system" class="form-control" placeholder="60"   />
                          </div>
                        </div>
                      </div>  
                      
                      
                    </div>
                    </div>
                    

                    


                      <button type="submit" class="btn btn-primary mr-2">Register</button>
                    <button class="btn btn-light">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>            
          </div>
        </div>
        <!-- content-wrapper ends -->

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>