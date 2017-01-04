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
		$query = 'Update tblPatientAdmission Set DischargeDate = "'.date('Y-m-d H:i:s').'",DischargeReason = "'.$data["DischargeReason"].'",DischargedBy="'.$data["DischargedBy"].'",IsDischarged=1 Where ID = "'.$data["AdmissionID"].'"';
		$this->db->query($query);
		$query = 'Update tblPatientCharges Set TotalFee = "'.$data["Total"].'",AdmissionFee = "'.$data["AdmissionFee"].'",ConsultantFee = "'.$data["ConsultantFee"].'",NursingCharges = "'.$data["NursingFee"].'",RoomCharges = "'.$data["RoomFee"].'",AcCharges = "'.$data["AcFee"].'",HeaterCharges = "'.$data["HeaterFee"].'",OperationFee = "'.$data["OperationFee"].'",TheaterFee = "'.$data["TheaterFee"].'",AnaesthesiaFee = "'.$data["AnaesthesiaFee"].'",HardwareFee = "'.$data["HardwareFee"].'",OperationMedicines = "'.$data["MedicineFee"].'",Discount = "'.$data["Discount"].'",InventoryFee = "'.$data["InventoryFee"].'" Where AdmissionId =  "'.$data["AdmissionID"].'"';
		$this->db->query($query);
		foreach($data["InventoryUsed"] as $item)
		{
			$query="Insert into tblInventoryUsed (AdmissionId,ItemId,ItemQuantity) values (".$item->AdmissionId.",".$item->ItemId.",".$item->ItemQuantity.")";
			$this->db->query($query);
		}
		return true;
	}	
	function SavePatientBillOnDischarge($data)
	{
		$query = 'Update tblPatientCharges Set RemainingFee = "'.$data["RemainingFee"].'" Where ID = "'.$data["AdmissionID"].'"';
		return $this->db->query($query);
	}	
	function LoadPatients($isDischarged)
	{
		
		$query = 'SELECT p.PatientID,p.PatientName,pa.Id,pa.AdmissionDate,pa.AdmitReason,IFNULL(IsDischarged,0) IsDischarged FROM `tblpatient` p join `tblpatientAdmission` pa on p.PatientID = pa.PatientID Order by pa.Id desc';
		return $this->db->query($query)->result();
	}
	function LoadPatientInfo($patientId,$admissionId)
	{
		$query = "select P.*,PA.*,PC.*,U.UserName from tblpatient P join tblPatientAdmission PA on P.patientID = PA.PatientId join tblPatientCharges PC on PC.AdmissionID = PA.ID JOIN tblUsers U ON U.UserID = PA.RefferedBy Where P.PatientID = ".$patientId." And Pa.ID = ".$admissionId;
		return $this->db->query($query)->result();
	}
}
class InventoryItemUsed
{
	public $ItemId;
	public $ItemPrice;
	public $ItemQuantity;
	public $AdmissionId;
}
?>