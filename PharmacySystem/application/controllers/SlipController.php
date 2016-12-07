<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SlipController extends MY_Controller 
 {   
	
	public function __construct() {
	parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');
		
		$this->load->helper('url');

		$this->load->database();
		
		// Load database
		$this->load->model('mysqlhelper');
		
	}
	
	public function SaveMainSlip()
	{	
		$data = array(
				'PatientName' => $this->input->post("PatientName"),
				'FeesRecieved' => $this->input->post("FeesRecieved"),
				'tokenid' => $this->session->userdata["logged_in"]["tokenid"],
				'userrole' => $this->session->userdata["logged_in"]["userrole"]
			);
		echo $this->mysqlhelper->insertpatienttoken($data);
		
	}
	
}