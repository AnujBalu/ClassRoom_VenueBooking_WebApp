
<?php
class Inserting_model extends CI_Model{
    function form_info($data){

      
        $this->load->database();
        $this->db->insert('form',$data);
        
    }
    public function select()  
      {  
        $this->load->database();
        
        $query = $this->db->get('form');  
        return $query;  
      }

    // ************************** Insert the data to Room Info **************************

    
    function room_info($id,$room_data){
      
        $this->load->database();

        $this->db->select('block_name.*, room_type.*,floor.*,seating_capacity.*');
        $this->db->from('block_name');
        $this->db->join('room_type', 'room_type.room_type_id = block_name.block_name_id','left');
        $this->db->join('floor', 'floor.floor_id = block_name.block_name_id','left');
        $this->db->join('seating_capacity', 'seating_capacity.seating_capacity_id = block_name.block_name_id','right');

        $query = $this->db->get();

        foreach ($query->result() as $row){

          if ($room_data['block_name'] == $row->block_name){
              $room_data['block_name']= $row->block_name_id;
          };

          if ($room_data['room_type'] == $row->room_type_name){
              $room_data['room_type']= $row->room_type_id;
          };

          if ($room_data['floor'] == $row->floor_name){
              $room_data['floor']= $row->floor_id;
          };

          if ($room_data['seating_capacity'] == $row->capacity){
              $room_data['seating_capacity']= $row->seating_capacity_id;
          };
        };
        //echo "<script>console.log('Debug Objects1: " . $id. "' );</script>";

        if ($id==""){
          $this->db->insert('room_info',$room_data);
        }
        else{
          $this->db->where('id',$id);
          $this->db->update('room_info',$room_data);
        }
    }

      // ************************** Get the Room info data from DB **************************
    public function get_room_info()  
      {  
        $this->load->database();


        
        $this->db->select('block_name.*, room_type.*,floor.*,seating_capacity.*');
        $this->db->from('block_name');
        $this->db->join('room_type', 'room_type.room_type_id = block_name.block_name_id','left');
        $this->db->join('floor', 'floor.floor_id = block_name.block_name_id','left');
        $this->db->join('seating_capacity', 'seating_capacity.seating_capacity_id = block_name.block_name_id','right');

        $query1 = $this->db->get();
        $query = $this->db->get('room_info'); 

        foreach ($query1->result() as $row){  
          
          foreach ($query->result() as $col){

            if ($col->block_name == $row->block_name_id){
                $col->block_name = $row->block_name;
            };

            if ($col->room_type == $row->room_type_id){
                $col->room_type = $row->room_type_name;
            };

            if ($col->floor == $row->floor_id){
                $col->floor = $row->floor_name;
            };

            if ($col->seating_capacity == $row->seating_capacity_id){
                $col->seating_capacity = $row->capacity;
            };
          }
        };
         return $query;  
      }

    public function room_type_name()  
      {  


         $query = $this->db->get('room_info');  

        
         return $query;  
      }
    
    public function block_name()
      {  
         $query = $this->db->get('block_name');  
         return $query;  
      }
    public function floor_name()
      {  
         $query = $this->db->get('floor');  
         return $query;  
      }
    public function year_name(){
      $query = $this->db->get('year');
      return $query;
    }
    public function dept_name(){
      $query = $this->db->get('department');
      return $query;
    }
    public function seating_capacity()
      {  
         $query = $this->db->get('seating_capacity');  
         return $query;  
      }




    public function room_edit($id)  
      {  
         $query = $this->db->get('room_info',$id);  
         return $query;  
      }

      
    // ************************** Update the Room info **************************

    public function edit_room_info($id,$room_data){
      
      
      $this->load->database();
      $this->db->where('id',$id);
      $this->db->update('room_info',$room_data);

      
    }

    public function allocated_room_insert($alloted_room_data,$para){
      $this->load->database();
     

      $this->db->select('department.*, year.*');
      $this->db->from('department');
      $this->db->join('year', 'year.year_id = department.dept_id ');

      $query1 = $this->db->get();
      
      $query = $this->db->get('academic_classroom_booking');
      

      $fdate = $alloted_room_data['from_date'];
      $tdate = $alloted_room_data['to_date'];

      $count = 0;
      $unique = 0;
      $alert_msg = 0;
      $is_name_in_form = false;
      foreach ($query->result() as $date){

      if((($fdate > $date->to_date) or ($fdate < $date->from_date)) and (($tdate < $date->from_date) or ($tdate >$date->to_date)) and ($count<1) and ($alloted_room_data['room_name']== $date->room_name) and $para=="") {     
        //echo "<script>console.log('from date: " .$alloted_room_data['room_name']. "' );</script>";
        //echo "<script>console.log('to date: " . $date->room_name. "' );</script>";
        //echo "<script>console.log('from date: " . $fdate. "' );</script>";
        //echo "<script>console.log('to date: " . $tdate. "' );</script>";
        //echo "<script>console.log('ofd: " . $date->from_date. "' );</script>";
        //echo "<script>console.log('otd: " . $date->to_date. "' );</script>";

        foreach ($query1->result() as $row){ 
            
              if ($alloted_room_data['dept'] == $row->dept_name){
                  $alloted_room_data['dept']= $row->dept_id;
              }

              if ($alloted_room_data['year'] == $row->year_name){
                  $alloted_room_data['year']= $row->year_id;
              }
            };
            $this->db->insert('academic_classroom_booking',$alloted_room_data);
            $
            $count = $count + 1;
            $unique = 1;
            $alert_msg = 1;
          }
          elseif($alloted_room_data['room_name']== $date->room_name){
            $is_name_in_form = true;
          }
    };

        if ($unique==0 and $para=="" and $is_name_in_form == false){

          foreach ($query1->result() as $row){ 

            if ($alloted_room_data['dept'] == $row->dept_name){
                $alloted_room_data['dept']= $row->dept_id;
            }

            if ($alloted_room_data['year'] == $row->year_name){
                $alloted_room_data['year']= $row->year_id;
            }
          };

          $this->db->insert('academic_classroom_booking',$alloted_room_data);
          $alert_msg = 1;
        }
        if($para != ""){

                  
          $this->db->where('alloted_room_id', $para);
          $this->db->delete('academic_classroom_booking');
        
            };
      
        return $alert_msg;

    }


    public function get_academic_schedule(){

      $this->load->database();

      $this->db->select('department.*, year.*');
      $this->db->from('department');
      $this->db->join('year', 'year.year_id = department.dept_id ');

      $query1 = $this->db->get();
      $query = $this->db->get('academic_classroom_booking');  

      foreach ($query1->result() as $row){ 
          foreach ($query->result() as $col){

            if ($col->dept == $row->dept_id){
                $col->dept = $row->dept_name;
            };

            if ($col->year == $row->year_id){
                $col->year = $row->year_name;
            };

          }
        };


      return $query; 
    }
    public function get_available_slots($date){
      
        $this->load->database();
        $query = $this->db->get('room_info');
        $alloted = $this->db->get('academic_classroom_booking');

        foreach ($query->result() as $col){
        foreach ($alloted->result() as $row){  
          
            
          //echo "<script>console.log('star: " . $col->room_name. "' );</script>";

          if(($date >= $row->from_date) and ($date <= $row->to_date) and ($row->room_name == $col->room_name)){
            $col->room_name = null;
            }
          else{
            if(($row->room_name == $col->room_name)){
            }
            }
          };

          }

        $this->db->select('block_name.*, room_type.*,floor.*,seating_capacity.*');
        $this->db->from('block_name');
        $this->db->join('room_type', 'room_type.room_type_id = block_name.block_name_id','left');
        $this->db->join('floor', 'floor.floor_id = block_name.block_name_id','left');
        $this->db->join('seating_capacity', 'seating_capacity.seating_capacity_id = block_name.block_name_id','right');

        $query1 = $this->db->get(); 

        foreach ($query1->result() as $row){  
          foreach ($query->result() as $col){

            if (( $col->block_name == $row->block_name_id )){
                $col->block_name = $row->block_name;
            };

            if ($col->room_type == $row->room_type_id){
                $col->room_type = $row->room_type_name;
            };

            if ($col->floor == $row->floor_id){
                $col->floor = $row->floor_name;
            };

            if ($col->seating_capacity == $row->seating_capacity_id){
                $col->seating_capacity = $row->capacity;
            };
          }
        };
        return $query;
      

    }




    ////////////////////////////////under work /////////////////////////////////
    public function get_available_admin_allocation(){
      $this->load->database();
      
      $fd = '2022-09-20';
      $td = '2022-09-29';
      $avail_room_name='EC111';
      echo "<script>console.log('star: " . $df. "' );</script>";

      $this->db->select('*');
      $this->db->from('academic_classroom_booking');
      $this->db->where('"'. $fd. '"BETWEEN from_date AND to_date');
      $this->db->or_where('"'. $td. '"BETWEEN from_date AND to_date');
      $this->db->where('room_name',$avail_room_name);

     
      $query1 = $this->db->get(); 

      
      $is_date_available = 0;
      for ($x = 0; $x < 1; $x++) {
     
      foreach ($query1->result() as $row){  
        echo "<script>console.log('swtar: " . $row->room_name. "' );</script>";
        echo "<script>console.log('star: " . $row->from_date. "' );</script>";

        $is_date_available = 1;
        };
        if($is_date_available == 0){
          echo "<script>console.log('staedwdcr - available' );</script>";

        };
      };
  }
  //////////////////////////////////////////////////////////////////////
}
?>