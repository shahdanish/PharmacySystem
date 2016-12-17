<?php

Class PatientAdmission_db extends CI_Model {


	public function SavePatient($data) 
	{
		$patientExists = 'Select PatientID from tblPatient where PatientCNIC="'.$data["PatientCNIC"].'"';
		$patientID = $this->db->query($patientExists)->result();
		if(count($patientID)==0)
		{ 
		$query = 'insert into tblPatient (PatientName,PatientCNIC,Address,CellNo,RegistrationDate,Age) VALUES ("'.$data["PatientName"].'","'.$data["PatientCNIC"].'","'.$data["Address"].'","'.$data["CellNo"].'", "'. date('Y-m-d H:i:s').'","'.$data["Age"].'");';
		$this->db->query($query);
		$query = 'SELECT LAST_INSERT_ID() As PatientID;';
		$patientID =  $this->db->query($query)->result();
		}
		return $patientID[0]->PatientID;
		
	}
	public function SavePatientAdmission($patientID,$data)
	{
		$query = 'insert into tblPatientAdmission (PatientID,AdmissionDate,AdmitReason,RefferedBy,RoomNo) VALUES ("'.$patientID.'","'.date('Y-m-d H:i:s').'","'.$data["AdmitReason"].'","'.$data["RefferedBy"].'", "'.$data["RoomNo"].'"); ';
		$this->db->query($query);
		$query = 'SELECT LAST_INSERT_ID() As AdmissionID;';
		$result = $this->db->query($query)->result();
		$AdmissionId = $result[0]->AdmissionID;
		$query = 'insert into tblPatientCharges(AdmissionID,AdvanceFee) VALUES ("'.$AdmissionId.'","'.$data["AdvanceFee"].'");';
		return $this->db->query($query);
		
	}
	function SavePatientDischargeInfo($data)
	{
		$query = 'Update tblPatientAdmission Set DischargeDate = "'.date('Y-m-d H:i:s').'",DischargeReason = "'.$data["DischargeReason"].'",DischargedBy="'.date('Y-m-d H:i:s').'",IsDischarged=1 Where ID = "'.$data["AdmissionID"].'"';
		return $this->db->query($query);
	}	
	function SavePatientBillOnDischarge($data)
	{
		$query = 'Update tblPatientCharges Set RemainingFee = "'.$data["RemainingFee"].'" Where ID = "'.$data["AdmissionID"].'"';
		return $this->db->query($query);
	}	
	function LoadPatients($isDischarged)
	{
		
		$query = 'SELECT p.PatientID,p.PatientName,pa.Id,pa.AdmissionDate,pa.AdmitReason FROM `tblpatient` p join `tblpatientAdmission` pa on p.PatientID = pa.PatientID WHERE IFNULL(pa.IsDischarged,0) = "'.$isDischarged.'"';
		return $this->db->query($query)->result();
	}
	function LoadPatientInfo($patientId,$admissionId)
	{
		$query = "select P.*,PA.*,PC.*,U.UserName from tblpatient P join tblPatientAdmission PA on P.patientID = PA.PatientId join tblPatientCharges PC on PC.AdmissionID = PA.ID JOIN tblUsers U ON U.UserID = PA.RefferedBy Where P.PatientID = ".$patientId." And Pa.ID = ".$admissionId;
		return $this->db->query($query)->result();
	}
}

?>