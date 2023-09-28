<!DOCTYPE html>
<html>
  <head>
    <script>
      
function select_projector(){
        
        var speaker = document.getElementById("radio_9");
        var no_of_projector = document.getElementById("box");
        if(speaker.checked == true){
          no_of_projector.style.display="block";
        }
        else{
         no_of_projector.style.display="none"
        }
       }
       function select_speaker(){
        
        var speaker = document.getElementById("radio_13");
        
        var no_of_speaker = document.getElementById("box_1");
        if(speaker.checked == true){
          no_of_speaker.style.display="block";
        }
        else{
          no_of_speaker.style.display="none"
        }
       }
       function select_system(){
        
        var speaker = document.getElementById("radio_15");
        var no_of_system = document.getElementById("box_2");
        if(speaker.checked == true){
          no_of_system.style.display="block";
        }
        else{
          no_of_system.style.display="none"
          
        }
       }
       </script>
    <title>Camp Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height:auto;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 2px;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 50px;
 
 
  
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
       z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 50px;

      border-radius: 2px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("<?php echo base_url()?>images/view_pg_img/request_form.png");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover,.question_1:hover p, .question_1 label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 5px 0;
      font-weight: bold;
      
      
      }
      .item span {
      color: rgb(8, 8, 8);
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      font-weight: bold;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      .question_1 span {
      margin-left: 30px;
      }
      .question_1-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }

      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .metod {
      display: flex; 

      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
  
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:87%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      
      .question-answer{
        width: 50%;
      }
      
      .question_1-answer{
        width: 50%;
      }
      
      .radio_9{
        float: left;
        padding-left: 10px;
      }
      .radio_10{
        float: right;
        width: 18px;
      }

      .radio_13{
        float: left;
        padding-left: 10px;
      }
      .radio_14{
        float: right;
        width: 18px;
     
        
        
      }
      .radio_15{
        float: left;
        padding-left: 10px;
      }
      .radio_16{
        float: right;
        width: 18px;
      }
      .radio_17{
        float: left;
        padding-left: 10px;
      }
      .radio_18{
        float: right;
        width: 18px;
      }
     
      .question{
        width: 100%;
        height: 150px;
      }
      .question_1{
        width: 100%;
      }
      .projector{
        float: left;
        width: 49%;
        font-weight: bold;
      }
      .wifi{
        float: left;
        width: 49%;
        font-weight: bold;
      }
      .speaker{
        float: left;
        width: 49%;
        font-weight: bold;
      }
      .system{
        float: left;
        width: 49%;
        font-weight: bold;
      }
      
      .box{
        width: 20%;
      }
      .box_1{
        width: 20%;
      }
      .box_2{
        width: 20%;
      }
      .no_of_projector{
        width: 48%;
        float: right;

      }
      .no_of_speaker{
        width: 48%;
        float: right;
        
      }
      .no_of_system{
        width: 48%;
        float: right;

      }

      @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');

body {
  margin: 0;
  background-color:#D4F1F4;
}

.navbar {
  display: flex;
  align-items: center;
  margin-top:0;
  width:100%;
  height: 60px;
  background-color:#ffffff;
  justify-content:flex-end;
  position:fixed;
  z-index: 999;
  box-shadow: 0 4px 2px -2px rgba(0,0,0,.5);

}

.logo-img {
  color:#fff;
  width: 55px;
  font-family: 'Bebas Neue';
  font-size:50px;
  letter-spacing:8px;
  text-shadow: 5px 5px #111;
  padding-right:5%;
}

.navbar a {
  text-decoration:none;
  color: black;
  font-size:20px;
  font-family: 'Nunito', sans-serif;
}

.navbar a:hover {
  color:#808080;
}

.navbar ul{
    width: 70%;
  list-style:none;
  margin-right:30px;
}

.navbar li {
  padding-left:40px;
  display:inline-block;
}

.login-btn {
  background-color:#0c91f5;
  width:90px;
  height:45px;
  margin-right:20px;
  border-radius:30px;
  border:none;
  color:#fff;
  font-size:18px;
  font-family: 'Nunito', sans-serif;
}
.login-btn:hover{
    background-color:#49abf5;
}

@media screen and (max-width: 600px) {
  .testbox,.colums,.banner,.item,.projector,.question,.question-answer,.radio_9,.radio_10,.radio_11,.radio_12,.radio_13,.radio_14,.radio_15,.radio_16,.radio_17,.radio_18,.speaker,.system,.wifi .col-75, .colums,.item,.no_of_projector,.no_of_speaker,.no_of_system,.btn-block input[type="radio"] {
    width: 1000%;
    margin-top:100px;
  }
 }
 @media (max-width: 991px){
    .logo-img{
        width: 55px;
    }
 }
    </style>


  </head>

  


  <body style="background-color: rgb(4, 85, 151);">

  <header>
      <nav class="navbar">
        
      <img class="logo-img" src="<?php echo base_url()?>images/logo/login_logo.jpeg" ALT="BIT">

        
        <ul>
          <li><a href="#">Schedule Request</a></li>
          <li><a href="#">View Status</a></li>
        </ul>
        
        <button class=login-btn><a href="<?php echo base_url()?>Login">Login</a></button>
        
    </header>

    <div class="testbox">
      <form method="post" action="<?php echo base_url(); ?>Dashboard/users_pg_request">
        <div class="banner">
        </div>
        <br/>
        <fieldset>
  <div class="colums">
          <div class="item">
            <label for="faculty_name"> Faculty Name <span>*</span></label>
            <input id="faculty_name" type="text" name="faculty_name" />
          </div>
          <div class="item">
            <label for="faculty_id"> Faculty ID<span>*</span></label>
            <input id="faculty_id" type="text" name="faculty_id" />
          </div>
          <div class="item">
            <label for="email"> Email <span>*</span></label>
            <input id="email" type="text"   name="email" />
          </div>
          <div class="item">
            <label for="capacity">Capacity<span>*</span></label>
            <input id="capacity" type="number" name="capacity" list="capacity_list" />
            <datalist id='capacity_list'>
            <option selected hidden></option>
              <?php  
                  foreach ($capacity->result() as $row)  
                  {  
                      ?>
                <option><?php echo $row->capacity ?></option>
              <?php } ?>
           </datalist>
          </div>
          <div class="item">
            <label for="room_type">Room type <span>*</span></label>
            <input id="room_type" type="text" name="room_type" list="room_type_list" />
            <datalist id='room_type_list'>
            <option selected hidden></option>
            <?php  
                foreach ($room_type->result() as $row)  
                {  
                    ?>
              <option><?php echo $row->room_type_name ?></option>
            <?php } ?>
           </datalist>
          </div>
          <div class="item">
            <label for="proposal">Proposal<span>*</span></label>
            <input id="proposal" type="text" name="proposal" list="proposal_list" />
            <datalist id='proposal_list'>
            <option>Academics</option>
            <option>Interview</option>
            <option>Mentor Meeting</option>
            <option>Club Event</option>
            <option>Seminar</option>
            <option>Workshop</option> 
            <option>School Training</option>
            <option>Conference</option>
            <option id="others">Others</option>
           </datalist>
          </div>
        </div>
          <div class="item">
            <label for="date">From Date and time <span>*</span></label>
            <input type="datetime-local" id="daytime"name="from_date_time" />
          </div>
           <div class="item">
            <label for="date">To Date and time <span>*</span></label>
            <input type="datetime-local"id="daytime" name="to_date_time" />
           </div>
  

            <div class="question" style="border:1px solid transparent ;">
              
              <div class="projector">
                <p>Projector</p>
                <div class="question-answer">
                  <div class="radio_9">
                  <input type="radio" id="radio_9" value="YES" name="projector"/>
                  <label for="radio_9" class="radio"><span>YES</span></label>
                  
                </div>
                <div class="radio_10">
                  <input type="radio" value="NO" id="radio_10" name="projector"/>
                  <label for="radio_10" class="radio"><span>NO</span></label>
                </div>
              </div>
            </div>
        
              
              
            </div>

              <div class="question" style="border:1px solid transparent ;">
              
                <div class="speaker">
                  <p>Speaker</p>
                  <div class="question-answer">
                    <div class="radio_13">
                    <input type="radio" value="YES" id="radio_13" name="speaker" onclick="select_speaker()"/>
                    <label for="radio_13" class="radio"><span>Yes</span></label>
                    
                  </div>
                  <div class="radio_14">
                    <input type="radio" value="NO" id="radio_14" name="speaker" onclick="select_speaker()" />
                    <label for="radio_14" class="radio"><span>No</span></label>
                  </div>
                  
                </div>
              </div>
             
                
             
             <div class="no_of_speaker" id="box_1" style="display:none;">
                <label for="fname"> No of Speakers </label>
                <input  type="number" name="no_of_speaker" />
              </div>
            </div>
                  
                
                  
                  
                    <div class="question"style="border:1px solid transparent ;">
                      <div class="system">
                        <p>System</p>
                        <div class="question-answer">
                          <div class="radio_15">
                          <input type="radio" value="YES" id="radio_15" name="system" onclick="select_system()"/>
                          <label for="radio_15" class="radio"><span>Yes</span></label>
                        </div>
                        <div class="radio_16">
                          <input type="radio" value="NO" id="radio_16" name="system" onclick="select_system()"/>
                          <label for="radio_16" class="radio"><span>No</span></label>
                        </div>
                      </div>
                    </div>
         
                    <div class="no_of_system" id="box_2" style="display:none;">
                      <label for="fname"> No of System </label>
                      <input  type="number" name="no_of_system" />
                    </div>
                </div>

                    <div class="question">
                      
                      <div class="wifi">
                        <p>WIFI</p>
                        <div class="question-answer">
                          <div class="radio_17">
                          <input type="radio" value="YES" id="radio_17" name="wifi" />
                          <label for="radio_17" class="radio"><span>Yes</span></label>
                        </div>
                        <div class="radio_18">
                          <input type="radio" value="NO" id="radio_18" name="wifi" />
                          <label for="radio_18" class="radio"><span>No</span></label>
                        </div>
                      </div>
                    </div>
                 
                </fieldset>
        <div class="btn-block">
          <button type="submit" href="#">Submit</button>
        </div>
      </form>
    </div>


  </body>
</html>