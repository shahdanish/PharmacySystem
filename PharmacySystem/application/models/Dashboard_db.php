<?php
class Dashboard_db extends CI_Model {


	
	public function LoadTokenCount()
	{
		$queryText = 'select * from((SELECT COUNT(*) DailyTokenCount  from tbltoken where Date(TokenDate) = CURDATE()) DailyCount,(SELECT COUNT(*) MonthlyTokenCount from tbltoken where Month(TokenDate) = Month(CURDATE()))MonthlyCount, (SELECT Count(*) AdmitPatients FROM `tblpatientadmission` WHERE IFNULL(IsDisCharged,0) = 0) AdmitPatients, (select ItemQuantity from tblinventory where itemID = 1) ItemQuantity,(select Count(*) LabTests from tblPatientTests Where Month(TestDate) = '.date("m").') LabTests)';
		return $this->db->query($queryText)->result();
	}
	public function AddXRays($Items,$UserId)
	{
		$productBatch = 'x_'.date("m").date("d");
		$queryAddBatch = "select count(*) As BatchNo from tblproductbatch where BatchNo = '".$productBatch."'";
		$data = $this->db->query($queryAddBatch)->result();
		$productBatch = $data[0]->BatchNo + 1;
		$productBatch = 'X_'.$productBatch.'_'.date("m").date("d");
		$queryAddBatch = " Insert into tblproductbatch (BatchNo,BatchQuantity,ExpiryDate,ItemId) VALUES ('".$productBatch."',".$Items.",Now(),1);";
		
		$this->db->query($queryAddBatch);
		
		$queryItemExists = 'SELECT ItemId from tblinventory where itemID = 1';
		$result = $this->db->query($queryItemExists)->result();				  
		
		$QueryItemQuantity="";
		if(count($result) > 0)
			$QueryItemQuantity = "Update tblinventory set ItemQuantity = (itemQuantity + ".$Items."),UpdatedBy = ".$UserId.",UpdatedAt = NOW();";
		else
			$QueryItemQuantity = "Insert into tblinventory(ItemID,AddedDate,AddedBy,ItemQuantity) values(1,NOW(),".$UserId.",".$Items.");";
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
			$query = $query."Date(TokenDate)=".date("d");
		else
			$query = $query."Month(TokenDate)=".date("m");
		return $this->db->query($query)->result();
	}
}