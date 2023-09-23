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