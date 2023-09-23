
<?php
class Inserting_model extends CI_Model{
    function form_info($data){
        $this->load->database();
        $this->db->insert('form',$data);
    }
    public function select()  
      {  
         $query = $this->db->get('form');  
         return $query;  
      }
    
    function room_info($room_data){
        $this->load->database();
        $this->db->insert('room_info',$room_data);
    }
    public function get_room_info()  
      {  
         $query = $this->db->get('room_info');  
         return $query;  
      }

    public function room_type_name()  
      {  
         $query = $this->db->get('room_type');  
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

    public function room_edit($id)  
      {  
         $query = $this->db->get('room_info',$id);  
         return $query;  
      }
    public function edit_room_info($id,$room_data){
      
      
      $this->load->database();
      $this->db->where('id',$id);
      $this->db->update('room_info',$room_data);

      
    }
}
?>