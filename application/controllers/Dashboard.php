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
	
		
		
		$block_name = $this->db->get('block_name');
        foreach ($block_name->result() as $row){
            if ($data['room_data']->block_name == $row->block_name_id){
                $data['room_data']->block_name = $row->name;

          }
        };

        $name = $this->db->get('room_type');
        foreach ($name->result() as $row){
            if ($data['room_data']->name == $row->room_type_id){
                $data['room_data']->name = $row->name;
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


		//echo "<script>console.log('Debug Objects: " . $data['room_data']->name . "' );</script>";
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
		$this->load->view('Admin_1/list_form',$data);
		$this->load->view('Admin_1/Templates/java_script');
		
	}

	public function academic_schedule($para="")
	{	
		$this->load->database();  
	   	$this->load->model('Inserting_model');  
	   	$data['a_s'] = $this->Inserting_model->get_academic_schedule();
		$this->load->helper('url');
		if($para == 'all'){
			$data['available_slots'] = $this->Inserting_model->get_available_slots($para);
		}
		elseif($para == 'available_class_room'){
			$data['available_slots'] = $this->Inserting_model->get_available_slots($para);
		}
		else{
			$data['available_slots'] = $this->Inserting_model->get_available_slots($para);
		}


		//Calling Model to Insert data
		$data['room_type'] = $this->Inserting_model->room_type_name();
		$data['dept'] = $this->Inserting_model->dept_name();	
		$data['year'] = $this->Inserting_model->year_name();

		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/Templates/navbar');
		$this->load->view('Admin_1/Templates/side_bar');
		$this->load->view('Admin_1/academic_schedule',$data);
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

		$hi = $this->input->post('Register');
		echo $hi;
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
						'name'     => $this->input->post('room_type'),
						'projector'     => $this->input->post('projector'),
						'wifi'     => $this->input->post('wifi'),
						'systems'     => $systems,
						'speaker'     => $speaker,
                        );   
        
		$this->load->model("Inserting_model");
		$this->Inserting_model->room_info($para,$room_data);
		
						
        redirect('Dashboard/open_listform');
	}

	public function room_type_deletes($para=""){
		$this->load->helper('url');
		$this->load->database();
		$this->db->where('id', $para);
       	$this->db->delete('room_info');
       	redirect('Dashboard/open_listform');
	}

	public function allocated_room_form(){
        //this array is used to get fetch data from the view page. 
		 
		$this->load->helper('url');
		$from_date_time = $this->input->post('from_date_time');
		$f_dateTime = new DateTime($from_date_time);
		$f_date = $f_dateTime->format('Y-m-d');
		$f_time = $f_dateTime->format('H:i:s');
		//$xy = $this->input->post('times');
		$to_date_time = $this->input->post('to_date_time');
		$t_dateTime = new DateTime($to_date_time);
		$t_date = $t_dateTime->format('Y-d-m');
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
		
		$this->Inserting_model->allocated_room_insert($alloted_room_data);
		
		redirect('Dashboard/academic_schedule');
		
	}
	

}