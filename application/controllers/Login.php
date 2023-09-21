<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Admin_1/Templates/style_script');
		$this->load->view('Admin_1/login');
		$this->load->view('Admin_1/Templates/java_script');
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */