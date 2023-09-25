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
                  <form class="form-sample" method="post" action="">
                    <p class="card-description">
      
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label  class="col-sm-3 form-label">Room Type</label>                          
                          <div class="col-sm-9">
                            <select id="datalistOptions"   name="room_type" id="room_type" required >
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
                          <label for="event_id" class="col-sm-3 form-label">Availability</label>
                          <div class="col-sm-9">
                              
                          <select id="datalistOptions"   name="room_type" id="room_type" required >
                                 <option value="" disabled selected hidden>Availability</option>
                                 <option>Availabile</option>
                                 <option>Alloted</option>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                      <button type="submit" class="btn btn-primary mr-2">Search</button>
                      </div>
                  </form>
                  
        
                  </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Striped Table</h4>

                  <div class="table-responsive">
                    <table class="table table-striped" id="available">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                            First name
                          </th>
                        
                          <th>
                            Amount
                          </th>
                          <th>
                            Deadline
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            Herman Beck
                          </td>

                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face2.jpg" alt="image"/>
                          </td>
                          <td>
                            Messsy Adam
                          </td>

                          <td>
                            $245.30
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face3.jpg" alt="image"/>
                          </td>
                          <td>
                            John Richards
                          </td>

                          <td>
                            $138.00
                          </td>
                          <td>
                            Apr 12, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face4.jpg" alt="image"/>
                          </td>
                          <td>
                            Peter Meggik
                          </td>

                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face5.jpg" alt="image"/>
                          </td>
                          <td>
                            Edward
                          </td>

                          <td>
                            $ 160.25
                          </td>
                          <td>
                            May 03, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face6.jpg" alt="image"/>
                          </td>
                          <td>
                            John Doe
                          </td>

                          <td>
                            $ 123.21
                          </td>
                          <td>
                            April 05, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face7.jpg" alt="image"/>
                          </td>
                          <td>
                            Henry Tom
                          </td>

                          <td>
                            $ 150.00
                          </td>
                          <td>
                            June 16, 2015
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>
              
          </div>
      </div>

      
        <!-- content-wrapper ends -->

      <!-- main-panel ends -->
    
    <!-- page-body-wrapper ends -->