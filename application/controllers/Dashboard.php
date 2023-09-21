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
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */