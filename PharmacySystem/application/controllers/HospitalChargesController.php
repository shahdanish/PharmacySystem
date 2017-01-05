<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class HospitalChargesController extends MY_Controller
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
		$this->load->model('HospitalCharges_db');

	}
	public function Index()
	{
		if(isset($this->session->userdata["logged_in"])){
			if($this->session->userdata["logged_in"]["userrole"]==2){
				$this->middle = 'HospitalCharges';
				$this->layout();
			}
			else {
				$this->middle = 'OrthopaedicSlip'; // passing middle to function. change this for different views.
				$this->layout();
			}
		}
		else {
			$this->middle = 'login_form'; // passing middle to function. change this for different views.
			$this->layout();
		}
	}
	
	public function HospitalChargesReport()
	{
		if(isset($this->session->userdata["logged_in"])){
			if($this->session->userdata["logged_in"]["userrole"]==1){
				$this->middle = 'HospitalChargesReport';
				$this->layout();
			}
			else {
				$this->middle = 'Dashboard'; // passing middle to function. change this for different views.
				$this->layout();
			}
		}
		else {
			$this->middle = 'login_form'; // passing middle to function. change this for different views.
			$this->layout();
		}
	}

	function LoadAnesthesia()
	{
		$result = $this->HospitalCharges_db->LoadAnesthesia($this->input->post("ItemType"));
		echo json_encode($result);
	}

	function AddAnesthesia()
	{
		$result = $this->HospitalCharges_db->AddAnesthesia($this->input->post("ChargesID"),$this->input->post("DoctorName"),$this->input->post("PatientName"),$this->input->post("Charges"));
		echo json_encode($result);
	}
	function AddGases()
	{
		$result = $this->HospitalCharges_db->AddGases($this->input->post("ChargesID"),$this->input->post("ItemType"),$this->input->post("Charges"));
		echo json_encode($result);
	}
	function AddUtilities()
	{
		$result = $this->HospitalCharges_db->AddUtilities($this->input->post("ChargesID"),$this->input->post("ItemType"),$this->input->post("Charges"));
		echo json_encode($result);
	}
	function DeleteAnesthesia()
	{
		$result = $this->HospitalCharges_db->DeleteAnesthesia($this->input->post("ChargesID"));
		echo json_encode($result);
	}
 }
 ?>
