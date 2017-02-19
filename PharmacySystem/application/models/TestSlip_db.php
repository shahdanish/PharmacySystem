<?php

Class TestSlip_db extends CI_Model {


	public function SavePatientAndTest($data) {
		$patientExists = 'Select PatientID from tblPatient where PatientCNIC="'.$data["PatientCNIC"].'"';
		$patientID = $this->db->query($patientExists)->result();
		if(count($patientID)==0)
		{ 
		$query = 'insert into tblPatient (PatientName,PatientCNIC,RegistrationDate) VALUES ("'.$data["PatientName"].'","'.$data["PatientCNIC"].'", "'. date('Y-m-d H:i:s').'"); ';
		$this->db->query($query);
		$query = 'SELECT LAST_INSERT_ID() As PatientID;';
		$patientID =  $this->db->query($query)->result();
		}
		$TestIDs = explode(',', $data["TestID"]);
		for ($x = 0; $x <= sizeof($data["TestID"]); $x++) {
			$querytestfees = 'SELECT TestFee FROM tbltests WHERE TestID = '.$TestIDs[$x].';';
			$fee =  $this->db->query($querytestfees)->row()->TestFee;
			$query = 'insert into tblPatientTests (PatientID,TestDate,RecommendedBy,TestID,Fee) VALUES ("'.$patientID[0]->PatientID.'","'. date('Y-m-d H:i:s').'", "'.$data["RefferedBy"].'","'.$TestIDs[$x].'","'. $fee .'"); ';		
			$result = $this->db->query($query);
		}
		return $result;
	}
	public function SaveXRayTest($data) {
		
		$patientExists = 'Select PatientID from tblPatient where PatientCNIC="'.$data["PatientCNIC"].'"';
		$patientID = $this->db->query($patientExists)->result();
		if(count($patientID)==0)
		{ 
		$query = 'insert into tblPatient (PatientName,PatientCNIC,RegistrationDate) VALUES ("'.$data["PatientName"].'","'.$data["PatientCNIC"].'", "'. date('Y-m-d H:i:s').'"); ';
		$this->db->query($query);
		$query = 'SELECT LAST_INSERT_ID() As PatientID;';
		$patientID =  $this->db->query($query)->result();
		}
		$query = 'insert into tblPatientTests (PatientID,TestDate,RecommendedBy,TestName,Fee) VALUES ("'.$patientID[0]->PatientID.'","'. date('Y-m-d H:i:s').'", "'.$data["RefferedBy"].'","'.$data["Test"].'","'.$data["TestFee"].'"); ';		
		$result = $this->db->query($query);
		$query = "Update tblInventory set ItemQuantity = ItemQuantity - 1 where itemID = ".$data["ItemId"];
		$result = $this->db->query($query);
		return $result;
		
		
	}
	
}

?>