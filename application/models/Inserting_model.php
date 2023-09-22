
<?php
class Inserting_model extends CI_Model{
    function form_info($data){
        $this->load->database();
        $this->db->insert('form',$data);
    }
}
?>