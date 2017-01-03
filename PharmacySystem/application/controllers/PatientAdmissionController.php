<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PatientAdmissionController extends MY_Controller 
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
		$this->load->model('PatientAdmission_db');
		
	}
	public function PatientsList()
	{
		$this->middle = 'PatientsList';
		$this->layout();
	}
	public function Discharge()
	{
		$this->middle = 'Discharge';
		$this->layout();
	}
	public function SavePatient()
	{	
		$data = array(
				'PatientName' => $this->input->post("PatientName"),
				'PatientCNIC' => $this->input->post("PatientCNIC"),
				'RefferedBy' => $this->input->post("RefferedBy"),
				'CellNo' => $this->input->post("CellNo"),
				'Age' => $this->input->post("Age"),
				'Address' => $this->input->post("Address"),
				'AdvanceFee' => $this->input->post("AdvanceFee"),
				'RoomNo' => $this->input->post("RoomNo"),
				'BedNo' => $this->input->post("AdvanceFee"),
				'AdmitReason' => $this->input->post("AdmitReason")
			);
		$patientID = $this->PatientAdmission_db->SavePatient($data);
		
	   echo json_encode($this->SavePatientAdmission($patientID,$data));
		
	}
	function SavePatientAdmission($patientID,$data)
	{
		$this->PatientAdmission_db->SavePatientAdmission($patientID,$data);
	}	
	function SavePatientDischargeInfo()
	{
		$data = array(
				'AdmissionID' => $this->input->post("AdmissionID"),
				'DischargedBy' => $this->input->post("DischargedBy"),
				'DischargeReason' => $this->input->post("DischargeReason"),
				'AdmissionFee' => $this->input->post("AdmissionFee"),
				'ConsultantFee' => $this->input->post("ConsultantFee"),
				'NursingFee' => $this->input->post("NursingFee"),
				'RoomFee' => $this->input->post("RoomFee"),
				'AcFee' => $this->input->post("AcFee"),
				'HeaterFee' => $this->input->post("HeaterFee"),
				'OperationFee' => $this->input->post("OperationFee"),
				'TheaterFee' => $this->input->post("TheaterFee"),
				'AnaesthesiaFee' => $this->input->post("AnaesthesiaFee"),
				'HardwareFee' => $this->input->post("HardwareFee"),
				'MedicineFee' => $this->input->post("MedicineFee"),
				'Total' => $this->input->post("Total"),
				'Discount' => $this->input->post("Discount"),
				'InventoryFee' => $this->input->post("InventoryFee"),
				
				
				
				);
		echo json_encode($this->PatientAdmission_db->SavePatientDischargeInfo($data));
	}	
	function LoadPatients()
	{
		echo json_encode($this->PatientAdmission_db->LoadPatients($this->input->get("IsDischarged")));
		
	}
	function LoadPatientInfo()
	{
		echo json_encode($this->PatientAdmission_db->LoadPatientInfo($this->input->post("PatientID"),$this->input->post("AdmissionID")));
	}
}
?>