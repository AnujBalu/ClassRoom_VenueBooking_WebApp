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
      background-image: url("s.png");  
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
      @media screen and (max-width: 600px) {
  .testbox,.colums,.banner,.item,.projector,.question,.question-answer,.radio_9,.radio_10,.radio_11,.radio_12,.radio_13,.radio_14,.radio_15,.radio_16,.radio_17,.radio_18,.speaker,.system,.wifi .col-75, .colums,.item,.no_of_projector,.no_of_speaker,.no_of_system,.btn-block input[type="radio"] {
    width: 1000%;
    margin-top:100px;
  }
 }
    </style>
  </head>
  <body style="background-color: rgb(4, 85, 151);">
    <div class="testbox">
      <form>
        <div class="banner">
        </div>
        <br/>
        <fieldset>
  <div class="colums">
          <div class="item">
            <label for="fname"> Faculty Name <span>*</span></label>
            <input id="fname" type="text" name="fname" />
          </div>
          <div class="item">
            <label for="lname"> Faculty ID<span>*</span></label>
            <input id="lname" type="text" name="lname" />
          </div>
          <div class="item">
            <label for="address1"> Email <span>*</span></label>
            <input id="address1" type="text"   name="address1" />
          </div>
          <div class="item">
            <label for="address2">Capacity<span>*</span></label>
            <input id="address2" type="text"   list="listid" />
            <datalist id='listid'>
              <option selected value="" disabled selected></option>
            <option  >72</option>
            <option >42</option>
            <option >180</option>
            <option>1800</option>
           </datalist>
          </div>
          <div class="item">
            <label for="city">Room type <span>*</span></label>
            <input id="city" type="text"   list="list" />
            <datalist id='list'>
              <option selected value="" disabled selected></option>
            <option  >seminar hall</option>
            <option >Auditorium</option>
            <option >classRoom</option>
            <option>Discussion room</option>
           </datalist>
          </div>
          <div class="item">
            <label for="state">Proposal<span>*</span></label>
            <input id="state" type="text"   list="list_1" />
            <datalist id='list_1'>
              <option selected value="" disabled selected></option>
            <option  >Acadamics</option>
            <option >Event</option>
            <option >Mentor meeting</option>
            <option>club</option>
           </datalist>
          </div>
        </div>
          <div class="item">
            <label for="date">From Date and time <span>*</span></label>
            <input type="datetime-local" id="daytime"name="daytime" />
          </div>
           <div class="item">
            <label for="date">To Date and time <span>*</span></label>
            <input type="datetime-local"id="daytime" name="daytime" />
           </div>
  

            <div class="question" style="border:1px solid transparent ;">
              
              <div class="projector">
                <p>Projector</p>
                <div class="question-answer">
                  <div class="radio_9">
                  <input type="radio" value="none" id="radio_9" name="projector" onclick="select_projector()"/>
                  <label for="radio_9" class="radio"><span>Yes</span></label>
                  
                </div>
                <div class="radio_10">
                  <input type="radio" value="none" id="radio_10" name="projector" onclick="select_projector()" />
                  <label for="radio_10" class="radio"><span>No</span></label>
                </div>
              </div>
            </div>
        
              
              <div class="no_of_projector" id="box" style="display:none;">

                <label for="fname"> No of Projector <span></span></label>
                <input  type="text" name="fname" />
              </div>
            </div>

              <div class="question" style="border:1px solid transparent ;">
              
                <div class="speaker">
                  <p>Speaker</p>
                  <div class="question-answer">
                    <div class="radio_13">
                    <input type="radio" value="none" id="radio_13" name="speaker" onclick="select_speaker()"/>
                    <label for="radio_13" class="radio"><span>Yes</span></label>
                    
                  </div>
                  <div class="radio_14">
                    <input type="radio" value="none" id="radio_14" name="speaker" onclick="select_speaker()" />
                    <label for="radio_14" class="radio"><span>No</span></label>
                  </div>
                  
                </div>
              </div>
             
                
             
             <div class="no_of_speaker" id="box_1" style="display:none;">
                <label for="fname"> No of Speakers </label>
                <input  type="text" name="fname" />
              </div>
            </div>
                  
                
                  
                  
                    <div class="question"style="border:1px solid transparent ;">
                      <div class="system">
                        <p>System</p>
                        <div class="question-answer">
                          <div class="radio_15">
                          <input type="radio" value="none" id="radio_15" name="system" onclick="select_system()"/>
                          <label for="radio_15" class="radio"><span>Yes</span></label>
                        </div>
                        <div class="radio_16">
                          <input type="radio" value="none" id="radio_16" name="system" onclick="select_system()"/>
                          <label for="radio_16" class="radio"><span>No</span></label>
                        </div>
                      </div>
                    </div>
         
                    <div class="no_of_system" id="box_2" style="display:none;">
                      <label for="fname"> No of System </label>
                      <input  type="text" name="fname" />
                    </div>
                </div>

                    <div class="question">
                      
                      <div class="wifi">
                        <p>WIFI</p>
                        <div class="question-answer">
                          <div class="radio_17">
                          <input type="radio" value="none" id="radio_17" name="wifi" />
                          <label for="radio_17" class="radio"><span>Yes</span></label>
                        </div>
                        <div class="radio_18">
                          <input type="radio" value="none" id="radio_18" name="wifi" />
                          <label for="radio_18" class="radio"><span>No</span></label>
                        </div>
                      </div>
                    </div>
                 
                </fieldset>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>


  </body>
</html>