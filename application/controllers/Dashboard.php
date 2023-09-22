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
	public function open_listform()
	{
		$this->load->helper('url');
		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/Templates/navbar');
		$this->load->view('Admin_1/Templates/side_bar');
		$this->load->view('Admin_1/list_form');
		$this->load->view('Admin_1/Templates/java_script');
		
	}

	public function inserting_data(){
        //this array is used to get fetch data from the view page.  
		$this->load->helper('url');
        $data = array(  
                        'name'     => $this->input->post('name'),
						'faculty_id'     => $this->input->post('faculty_id'),
						'email'     => $this->input->post('email'),
						'year'     => $this->input->post('year'),
						'dept'     => $this->input->post('dept'),
						'event'     => $this->input->post('event'),
						'venue'     => $this->input->post('venue'),
						'duration'     => $this->input->post('duration'),
						'f_date'     => $this->input->post('f_date'),
						't_date'     => $this->input->post('t_date'),
						'f_time'     => $this->input->post('f_time'),
						't_time'     => $this->input->post('t_time'),
                        );   
        
		
		$this->load->model("Inserting_model");
		$this->Inserting_model->form_info($data);
						
        redirect('Dashboardn');
	}
}