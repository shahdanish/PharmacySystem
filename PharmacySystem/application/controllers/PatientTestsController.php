<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PatientTestsController extends MY_Controller 
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
		$this->middle = 'PatientTests';
		$this->layout();
	}
	function LoadPatientTests()
	{
		$result = $this->LabTests_db->LoadPatientTests();
		echo json_encode($result);
	}
	function LoadPatientXRays()
	{
		$result = $this->LabTests_db->LoadPatientXRays();
		echo json_encode($result);
	}
	
 }
 ?>