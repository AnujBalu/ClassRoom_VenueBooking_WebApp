
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
    public function room_edit($id)  
      {  
         $query = $this->db->get('form',$id);  
         return $query;  
      }
    
}
?>