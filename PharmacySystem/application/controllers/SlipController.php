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
		
		$this->load->model('TestSlip_db');
		
	}
	
	public function SaveMainSlip()
	{	
		$data = array(
				'PatientName' => $this->input->post("PatientName"),
				'FeesRecieved' => $this->input->post("FeesRecieved"),
				'tokenid' => $this->input->post("TokenID"),
				'userrole' => $this->session->userdata["logged_in"]["userrole"]
			);
		echo json_encode($this->mysqlhelper->insertpatienttoken($data));
		
	}
	public function LoadTokenID()
	{
		$result = $this->mysqlhelper->LoadNewTokenID();
		echo json_encode($result);
	}
	public function LoadTests()
	{
		$result = $this->mysqlhelper->LoadTests();
		echo json_encode($result);
	}
	public function LoadDoctors()
	{
		$result = $this->mysqlhelper->LoadDoctors();
		echo json_encode($result);
	}
	public function SavePatientAndTest()
	{
		$data = array(
				'PatientName' => $this->input->post("PatientName"),
				'PatientCNIC' => $this->input->post("PatientCnic"),
				'RefferedBy' => $this->input->post("RefferedBy"),
				'TestID' => $this->input->post("Test"),
				'TestFee' => $this->input->post("TestFee"),
				'TestType'=>$this->input->post("TestType")
			);
		echo json_encode($this->TestSlip_db->SavePatientAndTest($data));
	}
	public function SaveXRayTest()
	{
		$data = array(
				'PatientName' => $this->input->post("PatientName"),
				'PatientCNIC' => $this->input->post("PatientCnic"),
				'RefferedBy' => $this->input->post("RefferedBy"),
				'Test' => $this->input->post("Test"),
				'TestFee' => $this->input->post("TestFee"),
				'ItemId'=>$this->input->post("ItemId")
			);
		echo json_encode($this->TestSlip_db->SaveXRayTest($data));
	}
	
}
?>