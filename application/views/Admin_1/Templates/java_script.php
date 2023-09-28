<!-- plugins:js -->
  <!-- endinject -->
  <script src="<?php echo base_url();?>/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>/vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url();?>/vendors/datatables.net/jquery.dataTables.js"></script>


  <script src="<?php echo base_url();?>/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url();?>/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>/js/template.js"></script>
  <script src="<?php echo base_url();?>/js/settings.js"></script>
  <script src="<?php echo base_url();?>/js/todolist.js"></script>


  
  <script src="<?php echo base_url();?>/js/dashboard.js"></script>
  <script src="<?php echo base_url();?>/js/js/Chart.roundedBarCharts.js"></script>
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 


  <script> 
      function text(){
       var ab = document.getElementById("sysRadio1");
       var na = document.getElementById("sri");
       if(ab.selected == true  ){
        na.style.display="block";
       }else if(ab.checked == true){
        na.style.display="block";
       }else{
        na.style.display="none"
       }
      }

      function select_speaker(){
        
       var speaker = document.getElementById("speaker");
       var no_of_speaker = document.getElementById("no_of_speaker");
       if(speaker.checked == true){
        no_of_speaker.style.display="block";
       }
       else{
        no_of_speaker.style.display="none"
       }
      }

      function change(){
        var event_box = document.getElementById("event_id").value;
        var new_other = document.getElementById("new_other");
        if(event_box=='Others'){
          new_other.style.display="block";
        }
        else{
          new_other.style.display="none";
        }
      }

      function faculty_or_student(){
        var student = document.getElementById("Student");
        var faculty = document.getElementById("Faculty");
        if(student.checked == true){
          student_user.style.display="block";
          faculty_user.style.display="none";
       }
       else if (faculty.checked == true){
        student_user.style.display="none";
        faculty_user.style.display="block";
       }
      }

      $(document).ready(function () {
      $('#myTable').DataTable();
      });
      $(document).ready(function () {
          $('#available_search').DataTable();
      });
      $(document).ready(function () {
          $('#alloted_search').DataTable();
      });
  </script>

</body>

</html>

