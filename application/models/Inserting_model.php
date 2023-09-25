
<?php
class Inserting_model extends CI_Model{
    function form_info($data){
        $this->load->database();
        
		echo "<script>console.log('Debug Objects: " . $para. "' );</script>";
        $this->db->insert('form',$data);
        
		echo "<script>console.log('Debug Objects: " . $para. "' );</script>";
    }
    public function select()  
      {  
         $query = $this->db->get('form');  
         return $query;  
      }

    // ************************** Insert the data to Room Info **************************

    
    function room_info($id,$room_data){
      
        $this->load->database();

        $block_name = $this->db->get('block_name');
        foreach ($block_name->result() as $row){
          if ($room_data['block_name'] == $row->name){
              $room_data['block_name']= $row->block_name_id;
          }
        };

        $room_type = $this->db->get('room_type');
        foreach ($room_type->result() as $row){
          if ($room_data['room_type'] == $row->name){
              $room_data['room_type']= $row->room_type_id;
          }
        };

        $floor = $this->db->get('floor');
        foreach ($floor->result() as $row){
          if ($room_data['floor'] == $row->name){
              $room_data['floor']= $row->floor_id;
          }
        };
        $seating_capacity = $this->db->get('seating_capacity');
        foreach ($seating_capacity->result() as $row){
          if ($room_data['seating_capacity'] == $row->capacity){
              $room_data['seating_capacity']= $row->seating_capacity_id;
          }
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
        $query = $this->db->get('room_info'); 
        
        
        $block_name = $this->db->get('block_name');
        foreach ($block_name->result() as $row){
          foreach ($query->result() as $col){
            if ($col->block_name == $row->block_name_id){
                $col->block_name = $row->name;
            };
          }
        };

        $room_type = $this->db->get('room_type');
        foreach ($room_type->result() as $row){
          foreach ($query->result() as $col){
            if ($col->room_type == $row->room_type_id){
                $col->room_type = $row->name;
            };
          }
        };

        $floor = $this->db->get('floor');
        foreach ($floor->result() as $row){
          foreach ($query->result() as $col){
            if ($col->floor == $row->floor_id){
                $col->floor = $row->name;
            };
          }
        };

        $seating_capacity = $this->db->get('seating_capacity');
        foreach ($seating_capacity->result() as $row){
          foreach ($query->result() as $col){
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

        $department = $this->db->get('department');
        foreach ($department->result() as $row){
          if ($alloted_room_data['dept'] == $row->name){
              $alloted_room_data['dept']= $row->dept_id;
          }
        };

        $year = $this->db->get('year');
        foreach ($year->result() as $row){
          if ($alloted_room_data['year'] == $row->name){
              $alloted_room_data['year']= $row->year_id;
          }
        };

        $available_room = $this->db->get('room_info');
        foreach ($available_room  ->result() as $row){
          if ($alloted_room_data['room_name'] == $row->room_name){
            $this->db->insert('academic_classroom_booking',$alloted_room_data);
            $this->db->where('id', $row->id);
          }
        };
        if($para != ""){

          $allotment_available = $this->db->get_where('academic_classroom_booking', array('alloted_room_id' => $para))->row();
          $room_info = $this->db->get('room_info');
          foreach ($room_info->result() as $row){
              if ($allotment_available->room_name == $row->name){          
                  $this->db->where('alloted_room_id', $para);
                  $this->db->delete('academic_classroom_booking');
                }
              };
            };
      
        
        
        

    }

    public function get_academic_schedule(){

      $this->load->database();

      $query = $this->db->get('academic_classroom_booking');  

      $department = $this->db->get('department');
        foreach ($department->result() as $row){
          foreach ($query->result() as $col){
            if ($col->dept == $row->dept_id){
                $col->dept = $row->name;
            };
          }
        };

        $year = $this->db->get('year');
        foreach ($year->result() as $row){
          foreach ($query->result() as $col){
            if ($col->year == $row->year_id){
                $col->year = $row->name;
            };
          }
        };

        $room_name = $this->db->get('room_type');
        foreach ($room_name->result() as $row){
          foreach ($query->result() as $col){
            if ($col->room_name == $row->room_type_id){
                $col->room_name = $row->name;
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
          
            
          echo "<script>console.log('star: " . $col->room_name. "' );</script>";

          if(($date >= $row->from_date) and ($date <= $row->to_date) and ($row->room_name == $col->room_name)){
            $col->room_name = null;
            }
          else{
            if(($row->room_name == $col->room_name)){
            }
            }
          };

          }

        $block_name = $this->db->get('block_name');
        foreach ($block_name->result() as $row){
          foreach ($query->result() as $col){
            if (( $col->block_name == $row->block_name_id )){
                $col->block_name = $row->name;
            };
          }
        };

        $room_type = $this->db->get('room_type');
        foreach ($room_type->result() as $row){
          foreach ($query->result() as $col){
            if ($col->room_type == $row->room_type_id){
                $col->room_type = $row->name;
            };
          }
        };

        $floor = $this->db->get('floor');
        foreach ($floor->result() as $row){
          foreach ($query->result() as $col){
            if ($col->floor == $row->floor_id){
                $col->floor = $row->name;
            };
          }
        };

        $seating_capacity = $this->db->get('seating_capacity');
        foreach ($seating_capacity->result() as $row){
          foreach ($query->result() as $col){
            if ($col->seating_capacity == $row->seating_capacity_id){
                $col->seating_capacity = $row->capacity;
            };
          }
        };
        return $query;
      

    }
}
?>