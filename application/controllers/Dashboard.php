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
	public function add_room($param1='')
	{
		$this->load->database();  
	   	$this->load->model('Inserting_model'); 

	   	$data['info'] = $this->Inserting_model->get_room_info();
		$data['room_data'] = $this->db->get_where('room_info', array('id' => $param1))->row();
	
		
		
		$block_name = $this->db->get('block_name');
        foreach ($block_name->result() as $row){
            if ($data['room_data']->block_name == $row->block_name_id){
                $data['room_data']->block_name = $row->name;

          }
        };

        $room_type = $this->db->get('room_type');
        foreach ($room_type->result() as $row){
            if ($data['room_data']->room_type == $row->room_type_id){
                $data['room_data']->room_type = $row->name;
            };
        };

        $floor = $this->db->get('floor');
        foreach ($floor->result() as $row){
            if ($data['room_data']->floor == $row->floor_id){
                $data['room_data']->floor= $row->name;
            };
        };

        $seating_capacity = $this->db->get('seating_capacity');
        foreach ($seating_capacity->result() as $row){
            if ($data['room_data']->seating_capacity == $row->seating_capacity_id){
                $data['room_data']->seating_capacity = $row->capacity;
            };
        };


		//echo "<script>console.log('Debug Objects: " .$data['info']->seating_capacity. "' );</script>";
		//Calling Model to Insert data
		$data['room_type'] = $this->Inserting_model->room_type_name();
		$data['block_name'] = $this->Inserting_model->block_name();	
		$data['floor_name'] = $this->Inserting_model->floor_name();
		$data['seating_capacity'] = $this->Inserting_model->seating_capacity();

		// View
		$this->load->helper('url');
		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/Templates/navbar');
		$this->load->view('Admin_1/Templates/side_bar');
		$this->load->view('Admin_1/add_room',$data);
		$this->load->view('Admin_1/Templates/java_script');
		
	}

	public function class_room_booking($para="")
	{	
		$this->load->database();  
	   	$this->load->model('Inserting_model');  
	   	$data['a_s'] = $this->Inserting_model->get_academic_schedule();
		$this->load->helper('url');


		//Calling Model to Insert data
		$data['class_type'] = $this->Inserting_model->room_type_name();
		$data['dept'] = $this->Inserting_model->dept_name();	
		$data['year'] = $this->Inserting_model->year_name();

		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/Templates/navbar');
		$this->load->view('Admin_1/Templates/side_bar');
		$this->load->view('Admin_1/class_room_booking',$data);
		$this->load->view('Admin_1/Templates/java_script');
		
	}
	public function available_class_room(){
		$this->load->helper('url');

		
		$this->load->database();  
	   	$this->load->model('Inserting_model'); 
		$date = date('Y-m-d');
		$data['available_slots'] = $this->Inserting_model->get_available_slots($date);
		//echo "<script>console.log('Debug Objects: " . $dd. "' );</script>";

		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/Templates/navbar');
		$this->load->view('Admin_1/Templates/side_bar');
		$this->load->view('Admin_1/available_class_room',$data);
		$this->load->view('Admin_1/Templates/java_script');
	}


	public function inserting_data(){
        //this array is used to get fetch data from the view page.  
		$this->load->helper('url');

		$name = $this->input->post('user');
		if ($name='faculty'){
			$person_name = $this->input->post('faculty_name');
			$person_id = $this->input->post('faculty_id');
		}
		else{
			$person_name = $this->input->post('Student_name');
			$person_id = $this->input->post('Student_id');
		};

		$events = $this->input->post('proposal');
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
		$speaker = $this->input->post('speaker');
		if ($speaker=='YES'){
			$speaker = $this->input->post('no_of_speaker');
		}
		else{
			$speaker = "NO";
		};
		$from_date_time = $this->input->post('from_date_time');
		$f_dateTime = new DateTime($from_date_time);
		$f_date = $f_dateTime->format('Y-m-d');
		$f_time = $f_dateTime->format('H:i:s');
		//$xy = $this->input->post('times');
		$to_date_time = $this->input->post('to_date_time');
		$t_dateTime = new DateTime($to_date_time);
		$t_date = $t_dateTime->format('Y-m-d');
		$t_time = $t_dateTime->format('H:i:s');
		$hi = $this->input->post('Register');
        $data = array(  
                        'name'     => $person_name,
						'person_id'     => $person_id,
						'email'     => $this->input->post('email'),						
						'capacity'     => $this->input->post('capacity'),
						'room_type'     => $this->input->post('room_type'),
						'proposal'     => $this->input->post('proposal'),
						'f_date'     => $f_date,
						't_date'     => $t_date,
						'f_time'     => $f_time,
						't_time'     => $t_time,
						'projector'     => $this->input->post('projector'),
						'wifi'     => $this->input->post('wifi'),
						'systems'     => $systems,
						'speaker'     => $speaker,
                        );   
        
		echo "<script>console.log('Debug Objects: " . $data['f_date']. "' );</script>";
				
		$this->load->model("Inserting_model");
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
						'room_name'     => $this->input->post('room_name'),
						'room_type'     => $this->input->post('room_type'),
						'projector'     => $this->input->post('projector'),
						'wifi'     => $this->input->post('wifi'),
						'systems'     => $systems,
						'speaker'     => $speaker,
                        );   
		//echo "<script>console.log('Debug Objects1: " . $room_data['room_type']. "' );</script>";
		$this->load->model("Inserting_model");
		$this->Inserting_model->room_info($para,$room_data);
		
						
        redirect('Dashboard/add_room');
	}

	public function room_type_deletes($para=""){
		$this->load->helper('url');
		$this->load->database();
		$this->db->where('id', $para);
       	$this->db->delete('room_info');
       	redirect('Dashboard/add_room');
	}

	public function allocated_room_form($para=""){
        //this array is used to get fetch data from the view page. 
		//echo "<script>console.log('Debug Objects: " . $para. "' );</script>";
	
		$this->load->helper('url');
		$from_date_time = $this->input->post('from_date_time');
		$f_dateTime = new DateTime($from_date_time);
		$f_date = $f_dateTime->format('Y-m-d');
		$f_time = $f_dateTime->format('H:i:s');
		//$xy = $this->input->post('times');
		$to_date_time = $this->input->post('to_date_time');
		$t_dateTime = new DateTime($to_date_time);
		$t_date = $t_dateTime->format('Y-m-d');
		$t_time = $t_dateTime->format('H:i:s');

		$alloted_room_data = array(
			'dept'     => $this->input->post('department'),
			'year'     => $this->input->post('year'),						
			'room_name'     => $this->input->post('room_name'),
			'from_date'     => $f_date,
			'to_date'     => $t_date,
			'from_time'     => $f_time,
			'to_time'     => $t_time,
			);  
		
		$this->load->model("Inserting_model");
		//echo "<script>console.log('Debug Objects: " . $para. "' );</script>";
		$this->Inserting_model->allocated_room_insert($alloted_room_data,$para);
		
		
		redirect('Dashboard/class_room_booking');
		
	}
	

}