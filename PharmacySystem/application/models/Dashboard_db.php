<?php
class Dashboard_db extends CI_Model {


	
	public function LoadTokenCount()
	{
		$queryText = 'select * from((SELECT COUNT(*) DailyTokenCount  from tbltoken where Date(TokenDate) = CURDATE()) DailyCount,(SELECT COUNT(*) MonthlyTokenCount from tbltoken where Month(TokenDate) = Month(CURDATE()))MonthlyCount, (SELECT Count(*) AdmitPatients FROM `tblpatientadmission` WHERE IFNULL(IsDisCharged,0) = 0) AdmitPatients, (select Max(ItemQuantity) ItemQuantity from tblinventory where itemID = 1) ItemQuantity,(select Max(ItemQuantity) ItemQuantity1 from tblinventory where itemID = 2) ItemQuantity1,(select Count(*) LabTests from tblPatientTests Where testid IS NOT Null and Month(TestDate) = '.date("m").') LabTests)';
		return $this->db->query($queryText)->result();
	}
	public function AddXRays($Items,$UserId,$ItemID)
	{
		
		$productBatch = 'x_'.date("m").date("d");
		$queryAddBatch = "select count(*) As BatchNo from tblproductbatch where BatchNo = '".$productBatch."'";
		$data = $this->db->query($queryAddBatch)->result();
		$productBatch = $data[0]->BatchNo + 1;
		$productBatch = 'X_'.$productBatch.'_'.date("m").date("d");
		$queryAddBatch = " Insert into tblproductbatch (BatchNo,BatchQuantity,ExpiryDate,ItemId) VALUES ('".$productBatch."',".$Items.",Now(),".$ItemID.");";
		
		$this->db->query($queryAddBatch);
		
		$queryItemExists = 'SELECT ItemId from tblinventory where itemID = '.$ItemID;
		$result = $this->db->query($queryItemExists)->result();				  
		
		$QueryItemQuantity="";
		if(count($result) > 0)
			$QueryItemQuantity = "Update tblinventory set ItemQuantity = (itemQuantity + ".$Items."),UpdatedBy = ".$UserId.",UpdatedAt = NOW() where itemID = ".$ItemID.";";
		else
			$QueryItemQuantity = "Insert into tblinventory(ItemID,AddedDate,AddedBy,ItemQuantity) values(".$ItemID.",NOW(),".$UserId.",".$Items.");";
		$addBatch = $this->db->query($QueryItemQuantity);
		return $addBatch;
	}
	function LoadTestTypes()
	{
		$query="select * from tblTestTypes where IFNULL(isDeleted,0) = 0 ";
		return $this->db->query($query)->result();
		
	}
	function AddTestType($TestType)
	{
		$query="Insert into tblTestTypes(TestType,IsDeleted) values ('".$TestType."',0)";
		return $this->db->query($query);
	}
	function AddTest($TestType,$TestName,$TestFee)
	{
		$query="Insert into tblTests(TestName,TestType,TestFee,IsDeleted) values ('".$TestName."','".$TestType."','".$TestFee."',0)";
		return $this->db->query($query);
	}
	function LoadTests()
	{
		$query="Select * from tblTests Where IFNULL(IsDeleted,0)=0";
		return $this->db->query($query)->result();
	}
	function LoadVisitors($VisitorType)
	{
		$query="Select * from tblToken Where ";
		if($VisitorType=="d")
			$query = $query."Date(TokenDate)= DATE(CURDATE())";
		else
			$query = $query."Month(TokenDate)=".date("m");
		$query = $query." Order by Id desc";
		return $this->db->query($query)->result();
	}
	public function LoadDailySummaryAccountant()
	{
		$queryText = 'SELECT * from((SELECT COUNT(*) DailyTokenCount  from tbltoken where Date(TokenDate) = CURDATE()) DailyCount,(SELECT COUNT(*) DailyLabTestCount  from tblpatienttests where Date(TestDate) = CURDATE()) DailyLabTestCount, (SELECT COUNT(*) DailyXRayCount  from tblpatienttests where Date(TestDate) = CURDATE() And TestID is null) DailyXRayCount, (SELECT Count(*) DailyAdmitPatientsCount FROM `tblpatientadmission` WHERE IFNULL(IsDisCharged,0) = 0 And Date(AdmissionDate) = CURDATE()) DailyAdmitPatientsCount,(SELECT Count(*) DailyDischargePatientsCount FROM `tblpatientadmission` WHERE IFNULL(IsDisCharged,0) = 1 And Date(DischargeDate) = CURDATE()) DailyDischargePatientsCount)';
		return $this->db->query($queryText)->result();
	}
	public function LoadDailySummaryDoctor()
	{
		$queryText = 'SELECT * from((SELECT COUNT(*) DailyTokenCount  from tbltoken where Date(TokenDate) = CURDATE()) DailyCount, (SELECT SUM(TotalFee) DailyTokenFees  from tbltoken where Date(TokenDate) = CURDATE()) DailyTokenFees,(SELECT COUNT(*) DailyLabTestCount  from tblpatienttests where Date(TestDate) = CURDATE()) DailyLabTestCount, (SELECT SUM(tt.TestFee) DailyTestFees from tblpatienttests AS tpt JOIN tbltests AS tt ON tpt.TestID = tt.TestID where Date(TestDate) = CURDATE()) DailyTestFees, (SELECT COUNT(*) DailyXRayCount  from tblpatienttests where Date(TestDate) And TestID is null = CURDATE()) DailyXRayCount, (SELECT Count(*) DailyAdmitPatientsCount FROM `tblpatientadmission` WHERE IFNULL(IsDisCharged,0) = 0 And Date(AdmissionDate) = CURDATE()) DailyAdmitPatientsCount, (SELECT SUM(tpc.AdvanceFee) DailyAdmissionFee FROM `tblpatientadmission` tpa JOIN tblpatientcharges tpc on tpa.Id = tpc.AdmissionID WHERE IFNULL(tpa.IsDisCharged,0) = 0 And Date(tpa.AdmissionDate) = CURDATE()) DailyAdmissionFee, (SELECT Count(*) DailyDischargePatientsCount FROM `tblpatientadmission` WHERE IFNULL(IsDisCharged,0) = 1 And Date(DischargeDate) = CURDATE()) DailyDischargePatientsCount, (SELECT (SUM(tpc.TotalFee) - Sum(tpc.AdvanceFee)) DailyDischargeFee FROM `tblpatientadmission` tpa JOIN tblpatientcharges tpc on tpa.Id = tpc.AdmissionID WHERE IFNULL(tpa.IsDisCharged,0) = 1 And Date(tpa.AdmissionDate) = CURDATE()) DailyDischargeFee, (SELECT SUM(Charges) AS DailyHospitalCharges FROM tblhospitalcharges where Date(Date) = CURDATE()) DailyHospitalCharges)';
		return $this->db->query($queryText)->result();
	}
	public function AdjustTestFee($id,$fee)
	{
		$query="Update tbltoken Set TotalFee=".$fee." Where Id = ".$id;
		return $this->db->query($query);
	}
}