<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->


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
  </script>

</body>

</html>

