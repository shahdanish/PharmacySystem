<?php

Class PatientAdmission_db extends CI_Model {


	public function SavePatient($data) 
	{
		$patientExists = 'Select PatientID from tblPatient where PatientCNIC="'.$data["PatientCNIC"].'"';
		$patientID = $this->db->query($patientExists)->result();
		if(count($patientID)==0)
		{ 
		$query = 'insert into tblPatient (PatientName,PatientCNIC,Address,CellNo,RegistrationDate,Age,Gender) VALUES ("'.$data["PatientName"].'","'.$data["PatientCNIC"].'","'.$data["Address"].'","'.$data["CellNo"].'", "'. date('Y-m-d H:i:s').'","'.$data["Age"].'","'.$data["Gender"].'");';
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
			$query="Insert into tblInventoryUsed (AdmissionId,ItemId,ItemQuantity,ItemPrice) values (".$item->AdmissionId.",".$item->ItemId.",".$item->ItemQuantity.",".$item->ItemPrice.")";
			$this->db->query($query);
			$queryInventory = "Update tblinventory Set ItemQuantity = ItemQuantity - ".$item->ItemQuantity." Where ItemId = ".$item->ItemId;
			$this->db->query($queryInventory);
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
	function LoadInventoryUsed($admissionId)
	{
		$query = "SELECT Iu.ItemQuantity, Iu.ItemPrice, i.ItemName FROM  `tblinventoryUsed` Iu JOIN tblInventoryItems i ON iu.ItemId = i.ItemId WHERE iu.admissionid =".$admissionId;
		return $this->db->query($query)->result();
	}
	function SearchPatients($data)
	{
		$query = 'SELECT p.PatientID,p.PatientName,pa.Id,pa.AdmissionDate,pa.AdmitReason,IFNULL(IsDischarged,0) IsDischarged FROM `tblpatient` p join `tblpatientAdmission` pa on p.PatientID = pa.PatientID Where ';	
		if(!empty($data["Name"]))
			$query = $query."P.PatientName like '%".$data["Name"]."%'"; 
		if(!empty($data["CNIC"])){
			if(!empty($data["Name"]))
				$query = $query." And ";
			$query = $query." P.PatientCNIC like '%".$data["CNIC"]."%'";	
		}
		if(!empty($data["DischargeReason"]))
		{
			if(strpos($query,"And")==false){
				if(!empty($data["Name"]))	
					$query = $query." And Pa.DischargeReason like '%".$data["DischargeReason"]."%'";
				else
					$query = $query." Pa.DischargeReason like '%".$data["DischargeReason"]."%'";
			}
			else
				$query = $query." And Pa.DischargeReason like '%".$data["DischargeReason"]."%'";
		}
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