
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title bg-primary p-3" style="border-radius:15px; color:whitesmoke;">Info Search</h4>
                  <form class="form-sample" method="post" action="<?php echo base_url(); ?>room_type_data">
                    <p class="card-description">
      
                    </p>
                    <div class="row">
                      
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Venue</label>
                          <div class="col-sm-9">
                            <input type="text" name="venue" class="form-control" placeholder="EX : CT209" />
                          </div>
                        </div>
                      </div>
                      

                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Capacity</label>
                          <div class="col-sm-8">
                            <input type="number" name="capacity" class="form-control" placeholder="EX : 60" />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Room Type</label>
                          <div class="col-sm-9">
                            <input type="text" name="room_type" class="form-control" placeholder="EX : Seminar Hall" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      

                    <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Projector & Speaker</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="projector" class="form-check-input" name="projector" id="projector" value="YES"  >
                                Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="projector" id="projector" value="NO" >
                                No
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>

                    <div class="col-md-4">
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
                    
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Systems</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="systems" class="form-check-input" id="sysRadio1" value="YES"  onclick="text()">
                                Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-4">
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


                      <button type="submit" class="btn btn-primary ml-auto" >ADD</button>

                    
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
                          <th>Venue</th>
                          <th>Capacity</th>
                          <th>Room Type</th>
                          <th>Projector & Speaker</th>
                          <th>WIFI</th>
                          <th>No.of Systems</th>
                
                        </tr>  
                      </thead>
                      <tbody>

                      <?php  
        foreach ($info->result() as $row)  
        {  
            ?>

            <tr>
                        <td><?php echo $row->venue;?></td>
                        <td><?php echo $row->capacity;?></td>
                        <td><?php echo $row->room_type;?></td>
                        <td><?php echo $row->projector;?></td>
                        <td><?php echo $row->wifi;?></td>
                        <td><?php echo $row->systems;?></td>
                        <td class="font-weight-medium">
                        <a class="badge badge-success" href="<?php echo base_url(); ?>room_type_edit/<?php echo $row->id;?>">Edit</a>
                        <a class="badge badge-danger" href="<?php echo base_url(); ?>room_type_deletes/<?php echo $row->id;?>">Delete</a>
                            
                        </td>
                    </tr>
        <?php }  
    ?>
                        
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    
  </div>

