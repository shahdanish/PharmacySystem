<?php
class HospitalCharges_db extends CI_Model {

	function LoadAnesthesia($ItemType)
	{
		if($ItemType=="1")
			$query="select * from tblhospitalcharges where IsDeleted=0 and ItemID = 1";
		else if ($ItemType=="2")
			$query="select * from tblhospitalcharges where IsDeleted=0 and ItemID = 2";
		else if ($ItemType=="3")
			$query="select * from tblhospitalcharges where IsDeleted=0 and ItemID = 3";
		else 
			$query="select hc.ChargesID,hc.Charges,hc.ItemName,hc.Date,cl.Name  from tblhospitalcharges AS hc JOIN tblchargeslookup AS cl ON hc.ItemID = cl.ItemId";
		return $this->db->query($query)->result();
	}
	function SearchAnesthesia($fromdate,$todate,$chargestype)
	{
		$query='SELECT hc.ChargesID,hc.Charges,hc.Date,hc.ItemName,cl.Name from tblhospitalcharges AS hc JOIN tblchargeslookup AS cl ON hc.ItemID = cl.ItemId WHERE ';
		if(!empty($chargestype))
			$query = $query."hc.ItemID='".$chargestype."'";
		else 
			$query = $query."1=1";
		if(!empty($fromdate) && !empty($todate))
			$query = $query." AND STR_TO_DATE(hc.Date,'%Y-%m-%d')>=DATE_FORMAT(STR_TO_DATE('".$fromdate."', '%m/%d/%Y'), '%Y-%m-%d') AND STR_TO_DATE(hc.Date,'%Y-%m-%d')<=DATE_FORMAT(STR_TO_DATE('".$todate."', '%m/%d/%Y'), '%Y-%m-%d')";
		else if (!empty($fromdate) && empty($todate)) {
			$query = $query." AND STR_TO_DATE(hc.Date,'%Y-%m-%d')>=DATE_FORMAT(STR_TO_DATE('".$fromdate."', '%m/%d/%Y'), '%Y-%m-%d')";
		}
		else if (empty($fromdate) && !empty($todate)) {
			$query = $query." AND STR_TO_DATE(hc.Date,'%Y-%m-%d')<=DATE_FORMAT(STR_TO_DATE('".$todate."', '%m/%d/%Y'), '%Y-%m-%d')";
		}
		//print($query);
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
