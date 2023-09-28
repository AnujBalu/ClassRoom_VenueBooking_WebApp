<style>
input[type=text],select{
  width:100%;
  padding:12px 20px;
  margin:8px 0;
  display:inline-block;
  border:1px solid #ccc;
  border-radius:4px;
  box-sizing:border-box;
  
}
select:required:invalid {
  color: gray;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}
</style>


      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title p-3 mb-2 bg-primary text-white rounded" >Allocate the Room</h4>
               
                    <p class="card-description">
      
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label  class="col-sm-3 form-label">Room Type</label>                          
                          <div class="col-sm-9">
                            <select id="datalistOptions"   name="room_type" id="room_type"  >
                                 <option value="" disabled selected hidden>Room Type</option>
                                 <option>Seminar Hall</option>
                                 <option>Conference Hall</option>
                                 <option>Discussion Room</option>
                                 <option>Auditorium</option>                                
                              </select>
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="availability"  class="col-sm-3 form-label">Availability</label>
                          <div class="col-sm-9">
                              
                          <select name="availability" id="availability" required >
                                 <option value="" disabled selected hidden>Availability</option>
                                 <option >Availabile</option>
                                 <option>Allotement</option>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                      <button onclick="available_or_not()"  class="btn btn-primary mr-2">Search</button>
                      </div>
                  
                  
        
                  </div>
                </div>

                
                <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

              <!--***************************************************************-->
                <div class="card-body" >
                  <h4 class="card-title">Striped Table</h4>
    <!--***************************************************************-->

                  <div class="table-responsive"  id="alloted">
                    <table class="table table-striped" id="alloted_search">
                    <thead>
                      
                      <tr>
                            <th>Name</th>
                            <th>Id</th>
                            <th>Capacity</th>
                            <th>Room Type</th>
                            <th>Proposal</th>
                            <th>From Date</th>
                            <th>To Date</th>
                            <th>View</th>
                  
                          </tr>  
                           
                        </thead>
                        <tbody>
                           <?php  
          foreach ($allotment->result() as $row)  
          {  
              ?>
  
              <tr>
                          <td><?php echo $row->name;?></td>
                          <td><?php echo $row->person_id;?></td>
                          <td><?php echo $row->capacity;?></td>
                          <td><?php echo $row->room_type;?></td>
                          <td><?php echo $row->proposal;?></td>
                          <td><?php echo $row->f_date;?></td>
                          <td><?php echo $row->t_date;?></td>
                          
                          <td class="font-weight-medium">
                          <a class="badge badge-success edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal" href="<?php echo base_url()?>Dashboard/open_table/<?php echo $row->id?>">Allocate</a>
                          </td>
                      </tr>
          <?php }  
      ?>
                        
                        
                      
                        </tbody>
  
                    </table>
</div>

     <!--***************************************************************-->
     <div class="table-responsive" id="available_room_list" style="display:none;">
                    <table class="table table-striped" id="available_search" >
                      <thead>
                        <tr>
                          <th>Room Name</th>
                          <th>Block Name</th>
                          <th>Floor</th>
                          <th>Seat Capacity</th>
                        </tr> 
                      </thead>
                      <tbody>
                    
                      </tbody>
                    </table>

    <!--***************************************************************-->


                  </div>
                </div>
              </div>
            </div>
              </div>

    <!--***************************************************************-->

              
          </div>
      </div>

      
        <!-- content-wrapper ends -->

      <!-- main-panel ends -->
    
    <!-- page-body-wrapper ends -->