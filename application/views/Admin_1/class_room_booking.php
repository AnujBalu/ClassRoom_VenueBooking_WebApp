
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title bg-primary p-3" style="border-radius:15px; color:whitesmoke;">Rooms</h4>
                  <form class="form-sample" method="post" action="<?php echo base_url(); ?>Dashboard/allocated_room_form">
                    <p class="card-description">
      
                    </p>

                       <!-- End of Name -->

                      <!-- Starting of Block Name -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Department</label>
                          <div class="col-sm-8">
                          <input class="form-control"  name="department" list="datalistOptions1" id="department" placeholder="EX : CT">
                            <datalist id="datalistOptions1">
                              <?php  
                                  foreach ($dept->result() as $row)  
                                  {  
                                      ?>
                                <option><?php echo $row->name ?></option>
                                <?php } ?>
                              </select>
                          </div>
                        </div>
                      </div>

                    <!-- End of Block Name -->
                    <!-- Starting of floor --> 
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Year</label>
                          <div class="col-sm-8">
                          <input class="form-control"  name="year" list="datalistOptions2" id="year" placeholder="EX : First floor">
                              <datalist id="datalistOptions2">
                                  <?php  
                                      foreach ($year->result() as $row)  
                                      {  
                                          ?>
                                    <option><?php echo $row->name ?></option>
                                    <?php } ?>
                              </select>
                            </div>
                        </div>
                      </div>

                    </div>
                      <!-- End of floor --> 
                      <!-- Starting of Seating Capacity -->
                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Room Name</label>
                          <div class="col-sm-8">
                            <input type="text" value="<?php echo $room_data->room_name; ?>" name="room_name" list="datalistOptions3" class="form-control" placeholder="EX : CT203" />
                            <datalist id="datalistOptions3">
                              <?php  
                                  foreach ($class_type->result() as $row)  
                                  {  
                                      ?>
                                <option><?php echo $row->room_name ?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                      </div>

                      <!-- End of Seating Capacity -->

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">From Date</label>
                          <div class="col-sm-9">
                            <input type="datetime-local" id="from_date_time" name="from_date_time" class="form-control">
                          </div>
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">To Date</label>
                          <div class="col-sm-9">
                            <input type="datetime-local" id="to_date_time" name="to_date_time" class="form-control">
                          </div>
                        </div>
                      </div>

                    <!-- End of Room Type -->
                     

                      <button type="submit" class="btn btn-primary ml-auto" >ADD</button>
                        
                    </div>
                  </form>
                </div>
              </div>
            </div> 
        <!-- content-wrapper ends -->


        
      
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Alloted Slot</p>
                  <div class="table-responsive">
                    <div class="table table-hover">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Department</th>
                          <th>Year</th>
                          <th>Room Name</th>
                          <th>From Date</th>
                          <th>To Date</th>
                          <th>From Time</th>
                          <th>To Time</th>
                        </tr>  
                      </thead>
                      <tbody>

                      
                      <?php  
        foreach ($a_s->result() as $row)  
        {  
            ?>

            <tr>
                        <td><?php echo $row->dept;?></td>
                        <td><?php echo $row->year;?></td>
                        <td><?php echo $row->room_name;?></td>
                        <td><?php echo $row->from_date;?></td>
                        <td><?php echo $row->to_date;?></td>
                        <td><?php echo $row->from_time;?></td>
                        <td><?php echo $row->to_time;?></td>
                        <td id="id" style="display:none;"><?php echo $row->alloted_room_id;?></td>
                        
                        <td class="font-weight-medium">
                        <a class="badge badge-danger" href="<?php echo base_url(); ?>Dashboard/allocated_room_form/<?php echo $row->alloted_room_id;?>">Delete</a>
                        </td>
                    </tr>
                  <?php } ?>       
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
      <!-- main-panel ends -->
            </div>
    <!-- page-body-wrapper ends -->
  </div>


           
  </div>
        </div>