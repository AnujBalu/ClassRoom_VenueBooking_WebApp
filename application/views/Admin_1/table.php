









  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 7px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 4px 2px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #04AA6D;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 30%;
}
</style>
</style>
</head>

<div class="scrollmenu">
<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Recent booking</p>
                  <div class="table-responsive">
                    <div class="table table-hover">
                    <table id="myTable" class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Id</th>
                          <th>E mail</th>
                          <th>Capacity</th>
                          <th>Room Type</th>
                          <th>Proposal</th>
                          <th>From Date</th>
                          <th>To Date</th>
                          <th>From Time</th>
                          <th>To Time</th>
                          <th>Projector</th>
                          <th>WIFI</th>
                          <th>Systems</th>
                          <th>Speakers</th>
                
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
                        <td><?php echo $row->email;?></td>
                        <td><?php echo $row->capacity;?></td>
                        <td><?php echo $row->room_type;?></td>
                        <td><?php echo $row->proposal;?></td>
                        <td><?php echo $row->f_date;?></td>
                        <td><?php echo $row->t_date;?></td>
                        <td><?php echo $row->f_time;?></td>
                        <td><?php echo $row->t_time;?></td>
                        <td><?php echo $row->projector;?></td>
                        <td><?php echo $row->wifi;?></td>
                        <td><?php echo $row->systems;?></td>
                        <td><?php echo $row->speaker;?></td>
                        <td>
                            
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" href="<?php echo base_url(); ?>deletes/<?php echo $row->id;?>" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
        <?php }  
    ?>
                      </tbody>
                    </table>

                    <body>


<a href="#" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>

<a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>
  
</body>

                    </div>
                  </div>
                </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    
  </div>
</div>
