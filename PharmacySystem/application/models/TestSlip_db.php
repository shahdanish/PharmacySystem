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
		$query = 'insert into tblPatientTests (PatientID,TestDate,RecommendedBy,TestID) VALUES ("'.$patientID[0]->PatientID.'","'. date('Y-m-d H:i:s').'", "'.$data["RefferedBy"].'","'.$data["TestID"].'"); ';		
		$result = $this->db->query($query);
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
		$query = 'insert into tblPatientTests (PatientID,TestDate,RecommendedBy,TestName) VALUES ("'.$patientID[0]->PatientID.'","'. date('Y-m-d H:i:s').'", "'.$data["RefferedBy"].'","'.$data["Test"].'"); ';		
		$result = $this->db->query($query);
		$query = "Update tblInventory set ItemQuantity = ItemQuantity - 1 where itemID = ".$data["ItemId"];
		$result = $this->db->query($query);
		return $result;
		
		
	}
	
}

?>