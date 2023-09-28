 <script>

        function auditorium_table(event){

          var auditorium = document.getElementById('auditorium').innerText;
          var seminarhall = document.getElementById("seminarhall").innerText;
          var conferencehall = document.getElementById("conferencehall").innerText;
          var academicclasses = document.getElementById("academicclasses").innerText;
          var smartclass = document.getElementById("smartclass").innerText;
          var discussionroom = document.getElementById("discussionroom").innerText;
          var syndicateroom = document.getElementById("syndicateroom").innerText;
      
          //console.log(document.getElementById("auditorium").innerText);
          var place = '';
          if(auditorium == event){
            place = 'AUDITOTIUM';
            location.href = "<?php echo base_url()?>Dashboard/dashboard/AUDITOTIUM";

          }
          else if(seminarhall== event){
            place = 'SEMINAR HALL';
            location.href = "<?php echo base_url()?>Dashboard/dashboard/SEMINAR HALL";

          }
          else if(conferencehall== event){
            window.place =  'CONFERENCE HALL';
            location.href = "<?php echo base_url()?>Dashboard/dashboard/CONFERENCE HALL";

          }
          else if(academicclasses== event){
            window.place = 'CLASS ROOM';
            location.href = "<?php echo base_url()?>Dashboard/dashboard/CLASS ROOM";

          }
          else if(smartclass== event){
            window.place = 'SMART CLASS ROOM';
            location.href = "<?php echo base_url()?>Dashboard/dashboard/SMART CLASS ROOM";

          }
          else if(discussionroom== event){
            window.place = 'DISCUSSION ROOM';
            location.href = "<?php echo base_url()?>Dashboard/dashboard/DISCUSSION ROOM";

          }
          else if(syndicateroom== event){
            window.place = 'SYNDICATE ROOM';
            location.href = "<?php echo base_url()?>Dashboard/dashboard/SYNDICATE ROOM";
          }
          else{
            window.place = 'AUDITOTIUM';
            location.href = "<?php echo base_url()?>Dashboard/dashboard/AUDITOTIUM";
          }
        }
  </script>
 
 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome to</h3>
                  <h6 class="font-weight-normal mb-0">Venue Information Portal  (VIP portal) <span class="text-primary"></span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white " type="text"   >
                     
                     <?php
                      date_default_timezone_set('Asia/Calcutta');
                      $current_zone = date_default_timezone_get();
                      echo "Today -  ";
                      echo date("d-m-Y")
 
                     ?>
                     
                    </button>
                   
                   
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="<?php echo base_url()?>images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">sathyamangalam</h4>
                        <h6 class="font-weight-normal">tamilnadu</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Rooms</p>
                      <p class="fs-30 mb-2">
 
                      <?php
                        echo $tot_rm;
                      ?>
 
                      </p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Booked</p>
                      <p class="fs-30 mb-2">
                        <?php echo $total_booked ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Unbooked</p>
                      <p class="fs-30 mb-2">
                      <?php
                          echo $un_booked;
                       ?>
                      </p>
 
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of request</p>
                      <p class="fs-30 mb-2">
                        <?php
                        	echo "<script>console.log('booked room	: " .$no_of_req. "' );</script>";

                        echo $no_of_req;
                        ?>
                      </p>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
          <div class="row">
          <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body" onclick="auditorium_table('Auditorium')">
                      <p id="auditorium" class="mb-4">Auditorium</p>
                      <p class="fs-30 mb-2">
                        <?php    
                        $sum_of_time = 0;
                        foreach ($time_per->result() as $time){
                          //echo "<script>console.log('star: " . $time->room_type. "' );</script>";
                          //echo "<script>console.log('star: " . $time->room_name. "' );</script>";

                          $from_time=$time->from_time;
                          $to_time=$time->to_time;
                          $from_date=$time->from_date;
                          $to_date=$time->to_date;
                          $id=$time->id;
                          $room_name=$time->room_name;
                          $room_type=$time->room_type;
                          if($room_type =='AUDITOTIUM'){
                            $diff_date=abs(strtotime($to_date) - strtotime($from_date));
                            $days = floor($diff_date / (60*60*24));
                            $times = (strtotime($to_time) - strtotime($from_time)) / 3600;
                            if ($days == 0){$days = 1;}
                            $diff = $days * $times;
                            $sum_of_time = $sum_of_time + $diff;

                           /* echo "<script>console.log('star-diff-time: " . $times. "' );</script>";
                            echo "<script>console.log('star-diff-date: " . $days. "' );</script>";

                            echo "<script>console.log('star-diff: " . $diff. "' );</script>";
                            echo "<script>console.log('sum: " . $sum_of_time. "' );</script>";
                            */
                          }
                        }
                        $per = ($sum_of_time / (30*24) )*100;
                        echo round($per,1).'%';

                        ?>
                      </p>
                     
                    </div>
                  </div>
                </div>
               
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body" onclick="auditorium_table('Seminar Hall')">
                      <p class="mb-4" id="seminarhall">Seminar Hall</p>
                      <p class="fs-30 mb-2">
                      <?php    

                        $sum_of_time = 0;
                        foreach ($time_per->result() as $time){
                          //echo "<script>console.log('star: " . $time->room_type. "' );</script>";
                          //echo "<script>console.log('star: " . $time->room_name. "' );</script>";

                          $from_time=$time->from_time;
                          $to_time=$time->to_time;
                          $from_date=$time->from_date;
                          $to_date=$time->to_date;
                          $id=$time->id;
                          $room_name=$time->room_name;
                          $room_type=$time->room_type;
                          if($room_type =='SEMINAR HALL'){
                            $diff_date=abs(strtotime($to_date) - strtotime($from_date));
                            $days = floor($diff_date / (60*60*24));
                            $times = (strtotime($to_time) - strtotime($from_time)) / 3600;
                            if ($days == 0){$days = 1;}
                            $diff = $days * $times;
                            $sum_of_time = $sum_of_time + $diff;

                           /* echo "<script>console.log('star-diff-time: " . $times. "' );</script>";
                            echo "<script>console.log('star-diff-date: " . $days. "' );</script>";

                            echo "<script>console.log('star-diff: " . $diff. "' );</script>";
                            echo "<script>console.log('sum: " . $sum_of_time. "' );</script>";
                            */
                          }
                        }
                        $per = ($sum_of_time / (30*24) )*100;
                        echo round($per,1).'%';
                        ?>
                        
                    </div>
                  </div>
                </div>
             
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body" onclick="auditorium_table('Academic Classes')">
                      <p class="mb-4" id="academicclasses">Academic Classes</p>
                      <p class="fs-30 mb-2">
                      <?php    
                        $sum_of_time = 0;
                        foreach ($time_per->result() as $time){
                          //echo "<script>console.log('star: " . $time->room_type. "' );</script>";
                          //echo "<script>console.log('star: " . $time->room_name. "' );</script>";

                          $from_time=$time->from_time;
                          $to_time=$time->to_time;
                          $from_date=$time->from_date;
                          $to_date=$time->to_date;
                          $id=$time->id;
                          $room_name=$time->room_name;
                          $room_type=$time->room_type;
                          if($room_type =='CLASS ROOM'){
                            $diff_date=abs(strtotime($to_date) - strtotime($from_date));
                            $days = floor($diff_date / (60*60*24));
                            $times = (strtotime($to_time) - strtotime($from_time)) / 3600;
                            if ($days == 0){$days = 1;}
                            $diff = $days * $times;
                            $sum_of_time = $sum_of_time + $diff;

                           /* echo "<script>console.log('star-diff-time: " . $times. "' );</script>";
                            echo "<script>console.log('star-diff-date: " . $days. "' );</script>";

                            echo "<script>console.log('star-diff: " . $diff. "' );</script>";
                            echo "<script>console.log('sum: " . $sum_of_time. "' );</script>";
                            */
                          }
                        }
                        $per = ($sum_of_time / (30*24) )*100;
                        echo round($per,1).'%';
                        ?>
                    </div>
                  </div>
                </div>
 
                <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body" onclick="auditorium_table('Smart Class Rooms')">
                      <p class="mb-4" id="smartclass">Smart Class Rooms</p>
                      <p class="fs-30 mb-2">
                      <?php    
                        $sum_of_time = 0;
                        foreach ($time_per->result() as $time){
                          echo "<script>console.log('star: " . $time->room_type. "' );</script>";
                          echo "<script>console.log('star: " . $time->room_name. "' );</script>";

                          $from_time=$time->from_time;
                          $to_time=$time->to_time;
                          $from_date=$time->from_date;
                          $to_date=$time->to_date;
                          $id=$time->id;
                          $room_name=$time->room_name;
                          $room_type=$time->room_type;
                          if($room_type =='SMART CLASS ROOM'){
                            $diff_date=abs(strtotime($to_date) - strtotime($from_date));
                            $days = floor($diff_date / (60*60*24));
                            $times = (strtotime($to_time) - strtotime($from_time)) / 3600;
                            if ($days == 0){$days = 1;}
                            $diff = $days * $times;
                            $sum_of_time = $sum_of_time + $diff;
                          /*
                            echo "<script>console.log('star-diff-time: " . $times. "' );</script>";
                            echo "<script>console.log('star-diff-date: " . $days. "' );</script>";

                            echo "<script>console.log('star-diff: " . $diff. "' );</script>";
                            echo "<script>console.log('sum: " . $sum_of_time. "' );</script>";
                          */                          
                          }
                        }
                        $per = ($sum_of_time / (30*24) )*100;
                        echo round($per,1).'%';
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
             
               
               
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale" >
                    <div class="card-body" onclick="auditorium_table('Conference Hall')">
                      <p class="mb-4" id="conferencehall">Conference Hall</p>
                      <p class="fs-30 mb-2">

                      <?php    
                        $sum_of_time = 0;
                        foreach ($time_per->result() as $time){
                          //echo "<script>console.log('star: " . $time->room_type. "' );</script>";
                          //echo "<script>console.log('star: " . $time->room_name. "' );</script>";

                          $from_time=$time->from_time;
                          $to_time=$time->to_time;
                          $from_date=$time->from_date;
                          $to_date=$time->to_date;
                          $id=$time->id;
                          $room_name=$time->room_name;
                          $room_type=$time->room_type;
                          if($room_type =='CONFERENCE HALL'){
                            $diff_date=abs(strtotime($to_date) - strtotime($from_date));
                            $days = floor($diff_date / (60*60*24));
                            $times = (strtotime($to_time) - strtotime($from_time)) / 3600;
                            if ($days == 0){$days = 1;}
                            $diff = $days * $times;
                            $sum_of_time = $sum_of_time + $diff;

                           /* echo "<script>console.log('star-diff-time: " . $times. "' );</script>";
                            echo "<script>console.log('star-diff-date: " . $days. "' );</script>";

                            echo "<script>console.log('star-diff: " . $diff. "' );</script>";
                            echo "<script>console.log('sum: " . $sum_of_time. "' );</script>";
                            */
                          }
                        }
                        $per = ($sum_of_time / (30*24) )*100;
                        echo round($per,1).'%';
                        ?>
                      </p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body" onclick="auditorium_table('Discussion Room')">
                      <p class="mb-4" id="discussionroom">Discussion Room</p>
                      <p class="fs-30 mb-2">
                      <?php    
                        $sum_of_time = 0;
                        foreach ($time_per->result() as $time){
                          //echo "<script>console.log('star: " . $time->room_type. "' );</script>";
                          //echo "<script>console.log('star: " . $time->room_name. "' );</script>";

                          $from_time=$time->from_time;
                          $to_time=$time->to_time;
                          $from_date=$time->from_date;
                          $to_date=$time->to_date;
                          $id=$time->id;
                          $room_name=$time->room_name;
                          $room_type=$time->room_type;
                          if($room_type =='DISCUSSION ROOM'){
                            $diff_date=abs(strtotime($to_date) - strtotime($from_date));
                            $days = floor($diff_date / (60*60*24));
                            $times = (strtotime($to_time) - strtotime($from_time)) / 3600;
                            if ($days == 0){$days = 1;}
                            $diff = $days * $times;
                            $sum_of_time = $sum_of_time + $diff;

                           /* echo "<script>console.log('star-diff-time: " . $times. "' );</script>";
                            echo "<script>console.log('star-diff-date: " . $days. "' );</script>";

                            echo "<script>console.log('star-diff: " . $diff. "' );</script>";
                            echo "<script>console.log('sum: " . $sum_of_time. "' );</script>";
                            */
                          }
                        }
                        $per = ($sum_of_time / (30*24) )*100;
                        echo round($per,1).'%';
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
             
             
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body" onclick="auditorium_table('Syndicate Room')">
                      <p class="mb-4" id="syndicateroom">Syndicate Room</p>
                      <p class="fs-30 mb-2">
                      <?php    
                        $sum_of_time = 0;
                        foreach ($time_per->result() as $time){
                          //echo "<script>console.log('star: " . $time->room_type. "' );</script>";
                          //echo "<script>console.log('star: " . $time->room_name. "' );</script>";

                          $from_time=$time->from_time;
                          $to_time=$time->to_time;
                          $from_date=$time->from_date;
                          $to_date=$time->to_date;
                          $id=$time->id;
                          $room_name=$time->room_name;
                          $room_type=$time->room_type;
                          if($room_type =='SYNDICATE ROOM'){
                            $diff_date=abs(strtotime($to_date) - strtotime($from_date));
                            $days = floor($diff_date / (60*60*24));
                            $times = (strtotime($to_time) - strtotime($from_time)) / 3600;
                            if ($days == 0){$days = 1;}
                            $diff = $days * $times;
                            $sum_of_time = $sum_of_time + $diff;

                           /* echo "<script>console.log('star-diff-time: " . $times. "' );</script>";
                            echo "<script>console.log('star-diff-date: " . $days. "' );</script>";

                            echo "<script>console.log('star-diff: " . $diff. "' );</script>";
                            echo "<script>console.log('sum: " . $sum_of_time. "' );</script>";
                            */
                          }
                        }
                        $per = ($sum_of_time / (30*24) )*100;
                        echo round($per,1).'%';
                        ?>
                      </p>
 
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Others</p>
                      <p class="fs-30 mb-2">50%</p>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
 
               <!-- tab1 -->
               <?php if ($each_rm == ''){$each_rm = 'CLASS ROOM';} ?>
               <div class="col-lg-15 grid-margin ">
              <div class="card">  
 
                <div class="card-body" id="audi" >
                  <h4 class="card-title"><?php echo $each_rm ?></h4>
                  <div class="table-responsive">
                    <table class="table" >
                      <thead>
                        <tr>
                          <th>SI.NO</th>
                          <th>AUDITORIUM NAME</th>
                          <th>TOTAL HOURS</th>
                          <th>PERCENTAGE FOR 30 DAYS</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                          <?php 

                        $count = 1;
                        foreach ($time_per->result() as $time){
                          //echo "<script>console.log('star: " . $time->room_type. "' );</script>";
                          //echo "<script>console.log('each room: " . $each_rm. "' );</script>";

                          $from_time=$time->from_time;
                          $to_time=$time->to_time;
                          $from_date=$time->from_date;
                          $to_date=$time->to_date;
                          $id=$time->id;
                          $room_name=$time->room_name;
                          $room_type=$time->room_type;
                          if($room_type ==$each_rm){
                            $diff_date=abs(strtotime($to_date) - strtotime($from_date));
                            $days = floor($diff_date / (60*60*24));
                            $times = (strtotime($to_time) - strtotime($from_time)) / 3600;
                            if ($days == 0){$days = 1;}
                            $diff = $days * $times;

                           /* echo "<script>console.log('star-diff-time: " . $times. "' );</script>";
                            echo "<script>console.log('star-diff-date: " . $days. "' );</script>";

                            echo "<script>console.log('star-diff: " . $diff. "' );</script>";
                            echo "<script>console.log('sum: " . $sum_of_time. "' );</script>";
                            */
                            $per = ($diff / (30*24) )*100;
                            ?>
                            <tr>
                          <td><?php echo $count; ?></td>
                            <td><?php echo $room_name; ?></td>
                            <td><?php echo $diff; ?></td>
                            <td><?php echo round($per,1).'%'; ?></td>
                            </tr>
                            <?php
                            $count = $count +1;
                          }
                        }
                        
                        ?>
                        
 
                      </tbody>
                    </table>
                  </div>
                </div>
             
 
            <!-- tab1end -->
            
          </div>
        </div>
      </div>
 
         
     
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 
