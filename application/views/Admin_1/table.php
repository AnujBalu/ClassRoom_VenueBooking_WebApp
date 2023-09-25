
  
<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title bg-primary p-3" style="border-radius:15px; color:whitesmoke;">Table</h4>
                  <form class="form-sample" method="post" action="">
                    <p class="card-description">


                  <div class="table-responsive">
                    <div class="table table-hover">
                    <table id="myTable" class="table table-striped table-borderless">
                      
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
        foreach ($h->result() as $row)  
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
                        <a class="badge badge-success edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal" href="">View</a>
                    
                        
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

  </form>
                </div>
              </div>
            </div>            
          </div>
        </div>





<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <!--*********************************************************-->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
       
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIfBx0FJF2_t8L2IHszrZI2pfqNtnMUwZJCpXHd6ogOHg6f4ljvysSqpPtJ69G-bQrmug&usqp=CAU" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">IB201</h5>
              <p class="text-muted mb-1">II-floor</p>
              <p class="text-muted mb-4">IB Block</p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0"> Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Sankar</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">ID</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">CT2028</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">sankarprasath.ct21@bitsathy.ac.in</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">capacity</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">60</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">room type</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Class room</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">purpose</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Acadamic</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">from date</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">27/09/2022</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">to date</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">28/09/2022</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">From time</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">8:45am</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">To time</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">8:45am</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Speakers</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">2</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">System</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">60</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">WIFI</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Yes</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Projector</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">2</p>
                </div>
              </div>
              <hr>
              
             
            </div>
          </div>
          
          </div>
        </div>
      </div>
    </div>
  </section>

        <!--*********************************************************-->

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>