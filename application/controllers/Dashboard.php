<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/Templates/navbar');
		$this->load->view('Admin_1/Templates/side_bar');
		$this->load->view('Admin_1/dashboard');
		$this->load->view('Admin_1/Templates/java_script');
		
	}
public function method1($param1="")
    {
     
      echo $param1;



    }
	
	public function open_form()
	{
		
		$this->load->helper('url');
		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/Templates/navbar');
		$this->load->view('Admin_1/Templates/side_bar');
		$this->load->view('Admin_1/form');
		$this->load->view('Admin_1/Templates/java_script');
		
	}
	public function open_table()
	{
		$this->load->database();  
	   	$this->load->model('Inserting_model');  
	   	$data['h'] = $this->Inserting_model->select();
		$this->load->helper('url');
		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/Templates/navbar');
		$this->load->view('Admin_1/Templates/side_bar');
		$this->load->view('Admin_1/table',$data);
		$this->load->view('Admin_1/Templates/java_script');
		
	}
	public function open_listform($param1='')
	{
		$this->load->database();  
	   	$this->load->model('Inserting_model');  
	   	$data['info'] = $this->Inserting_model->get_room_info();
		$data['room_data'] = $this->db->get_where('room_info', array('id' => $param1))->row();

		$data['room_type'] = $this->Inserting_model->room_type_name();
		$data['block_name'] = $this->Inserting_model->block_name();	
		$data['floor_name'] = $this->Inserting_model->floor_name();		


		$this->load->helper('url');
		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/Templates/navbar');
		$this->load->view('Admin_1/Templates/side_bar');
		$this->load->view('Admin_1/list_form',$data);
		$this->load->view('Admin_1/Templates/java_script');
		
	}

	public function inserting_data(){
        //this array is used to get fetch data from the view page.  
		$this->load->helper('url');

		$events = $this->input->post('event');
		if ($events =="Others"){
			$events = $this->input->post('others_option');
		};
		

		$systems = $this->input->post('systems');
		if ($systems='YES'){
			$systems = $this->input->post('no_of_system');
		}
		else{
			$systems ="No";
		};
        $data = array(  
                        'name'     => $this->input->post('name'),
						'year'     => $this->input->post('year'),
						'dept'     => $this->input->post('dept'),						
						'capacity'     => $this->input->post('capacity'),
						'event'     => $events,
						'venue'     => $this->input->post('venue'),
						'duration'     => $this->input->post('duration'),
						'date'     => $this->input->post('date'),
						'f_time'     => $this->input->post('f_time'),
						't_time'     => $this->input->post('t_time'),
						'projector'     => $this->input->post('projector'),
						'wifi'     => $this->input->post('wifi'),
						'systems'     => $systems,
                        );   
        
						
		$this->load->model("Inserting_model");
		echo $data;
		$this->Inserting_model->form_info($data);
		
        redirect('Dashboard/open_form');
	}
	public function deletes($para=""){
		$this->load->helper('url');
		$this->load->database();
		$this->db->where('id', $para);
       	$this->db->delete('form');
       	redirect('open_table');
	}

	public function room_type_data($para=""){ 
		$this->load->helper('url');

		$systems = $this->input->post('systems');

		if ($systems=='YES'){
			$systems = $this->input->post('no_of_system');
		}
		else{
			$systems = "NO";
		}
		
		$speaker = $this->input->post('speaker');
		if ($speaker=='YES'){
			$speaker = $this->input->post('no_of_speaker');
		}
		else{
			$speaker = "NO";
		};

        $room_data = array(
                        'block_name'     => $this->input->post('block_name'),
						'floor'     => $this->input->post('floor'),						
						'seating_capacity'     => $this->input->post('seating_capacity'),
						'room_type'     => $this->input->post('room_type'),
						'projector'     => $this->input->post('projector'),
						'wifi'     => $this->input->post('wifi'),
						'systems'     => $systems,
						'speaker'     => $speaker,
                        );   
        
		if ($para==""){
		$this->load->model("Inserting_model");
		$this->Inserting_model->room_info($room_data);
		}
		else{
		
		$this->load->model("Inserting_model");
		$this->Inserting_model->edit_room_info($para,$room_data);
		}
						
        redirect('Dashboard/open_listform');
	}

	public function room_type_deletes($para=""){
		$this->load->helper('url');
		$this->load->database();
		$this->db->where('id', $para);
       	$this->db->delete('room_info');
       	redirect('Dashboard/open_listform');
	}


}