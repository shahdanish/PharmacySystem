<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LabTestsController extends MY_Controller 
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
		$this->load->model('LabTests_db');
		
	}
	public function Index()
	{
		$this->middle = 'LabTests';
		$this->layout();
	}
	public function TestTypes()
	{
		$this->middle = 'LabTestsTypes';
		$this->layout();
	}
	function LoadTestTypes()
	{
		$result = $this->LabTests_db->LoadTestTypes();
		echo json_encode($result);
	}
	function AddTestType()
	{
		$result = $this->LabTests_db->AddTestType($this->input->post("TestType"),$this->input->post("TestId"));
		echo json_encode($result);
	}
	function AddTest()
	{
		$result = $this->LabTests_db->AddTest($this->input->post("TestType"),$this->input->post("TestName"),$this->input->post("TestFee"),$this->input->post("TestId"));
		echo json_encode($result);
	}
	function LoadTests()
	{
		$result = $this->LabTests_db->LoadTests();
		echo json_encode($result);
	}
	function DeleteLabTest()
	{
		$result = $this->LabTests_db->DeleteLabTest($this->input->post("TestID"));
		echo json_encode($result);
	}
	function DeleteTestType()
	{
		$result = $this->LabTests_db->DeleteTestType($this->input->post("TestID"));
		echo json_encode($result);
	}
 }
 ?>