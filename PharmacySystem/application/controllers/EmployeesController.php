<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EmployeesController extends MY_Controller
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
		$this->load->model('Employee_db');

	}
	public function Index()
	{
		if(isset($this->session->userdata["logged_in"])){
			if($this->session->userdata["logged_in"]["userrole"]==1){
				$this->middle = 'Employee';
				$this->layout();
			}
			else {
				$this->middle = 'OrthopaedicSlip'; // passing middle to function. change this for different views.
				$this->layout();
			}
		}
		else {
			$this->middle = 'OrthopaedicSlip'; // passing middle to function. change this for different views.
			$this->layout();
		}
	}

	function LoadUser()
	{
		$result = $this->Employee_db->LoadUser();
		echo json_encode($result);
	}

	function AddUser()
	{
		$result = $this->Employee_db->AddUser($this->input->post("UserId"),$this->input->post("FirstName"),$this->input->post("LastName"),$this->input->post("Address"));
		echo json_encode($result);
	}
	function DeleteUser()
	{
		$result = $this->Employee_db->DeleteUser($this->input->post("UserId"));
		echo json_encode($result);
	}
 }
 ?>
