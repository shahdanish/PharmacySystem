<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MY_Controller 
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

		// Load database
		$this->load->model('Dashboard_db');
	}

	public function index()
	{
		$this->middle = 'Dashboard';
		$this->layout();
	}
	public function AdvanceSlip()
	{
		$this->middle = 'AdvanceSlip';
		$this->layout();
	}
	public function OrthopaedicSlip()
	{
		$this->middle = 'OrthopaedicSlip';
		$this->layout();
	}
	public function XraySlip()
	{
		$this->middle = 'XraySlip';
		$this->layout();
	}
	public function TestSlip()
	{
		$this->middle = 'TestSlip';
		$this->layout();
	}
	public function InPatient()
	{
		$this->middle = 'InPatient';
		$this->layout();
	}
	public function UserProfile()
	{
		$this->middle = 'UserProfile';
		$this->layout();
	}
	public function LoadTokenCount()
	{
		$result = $this->Dashboard_db->LoadTokenCount();
		echo json_encode($result);
	}
	public function AddXRays()
	{
		$result = $this->Dashboard_db->AddXRays($this->input->post("Items"),$this->session->userdata["logged_in"]["userID"]);
		echo json_encode($result);
	}
	public function LoadVisitors()
	{
		$result = $this->Dashboard_db->LoadVisitors($this->input->get("VisitorType"));
		echo json_encode($result);
	}
}