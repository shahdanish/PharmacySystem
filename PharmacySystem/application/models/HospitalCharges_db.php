<?php
class HospitalCharges_db extends CI_Model {

	function LoadAnesthesia($ItemType)
	{
		if($ItemType=="1")
			$query="select * from tblhospitalcharges where IsDeleted=0 and ItemID = 1";
		else if ($ItemType=="2")
			$query="select * from tblhospitalcharges where IsDeleted=0 and ItemID = 2";
		else 
			$query="select * from tblhospitalcharges where IsDeleted=0 and ItemID = 3";
		return $this->db->query($query)->result();
	}
	function AddAnesthesia($ChargesID,$DoctorName,$PatientName,$Charges)
	{
		$query="";
		$query="Insert into tblhospitalcharges(DoctorName,PatientName,Charges,ItemID,Date) values ('".$DoctorName."','".$PatientName."','".$Charges."',1,'".date('Y/m/d H:i:s')."')";
		return $this->db->query($query);
	}
	function AddGases($ChargesID,$ItemType,$Charges)
	{
		$query="";
		$query="Insert into tblhospitalcharges(ItemName,Charges,ItemID,Date) values ('".$ItemType."','".$Charges."',2,'".date('Y/m/d H:i:s')."')";
		return $this->db->query($query);
	}
	function AddUtilities($ChargesID,$ItemType,$Charges)
	{
		$query="";
		$query="Insert into tblhospitalcharges(ItemName,Charges,ItemID,Date) values ('".$ItemType."','".$Charges."',3,'".date('Y/m/d H:i:s')."')";
		return $this->db->query($query);
	}
	function DeleteAnesthesia($ChargesID)
	{
		$query="Update tblhospitalcharges set IsDeleted = 1 Where ChargesID = ".$ChargesID;
		return $this->db->query($query);
	}
}
