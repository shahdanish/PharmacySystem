<?php
class Dashboard_db extends CI_Model {


	
	public function LoadTokenCount()
	{
		$queryText = 'select * from((SELECT COUNT(*) DailyTokenCount  from tbltoken where Date(TokenDate) = CURDATE()) DailyCount,(SELECT COUNT(*) MonthlyTokenCount from tbltoken where Month(TokenDate) = Month(CURDATE()))MonthlyCount, (SELECT Count(*) AdmitPatients FROM `tblpatientadmission` WHERE IFNULL(IsDisCharged,0) = 0) AdmitPatients)';
		return $this->db->query($queryText)->result();
	}
	public function AddXRays($Items,$UserId)
	{
		
		$queryAddBatch = "set @batchNo = (select count(*) from tblproductbatch where BatchNo = CONCAT('x_',Month(CURDATE()),DAY(CURDATE())));\r\n".
						  " set @batchNo = @batchNo + 1;\r\n".
						  " set @productbatchNo = CONCAT('x_',@batchNo,'_');\r\n".
						  " set @productbatchNo = CONCAT(@productbatchNo,Month(CURDATE()),DAY(CURDATE()));\r\n".
						  " Insert into tblproductbatch (BatchNo,BatchQuantity,ExpiryDate,ItemId) VALUES (@productbatchNo,".$Items.",Now(),1);";
		
		$data = $this->db->query($queryAddBatch)->result();
		
		$queryItemExists = 'SELECT ItemId from tblinventory where itemID = 1';
		$result = $this->db->query($queryItemExists)->result();				  
		
		$QueryItemQuantity="";
		if($result->num_rows > 0)
			$QueryItemQuantity = "Update tblinventory set ItemQuantity = (itemQuantity + ".$Items."),UpdatedBy = ".$UserId.",UpdatedAt = NOW();";
		else
			$QueryItemQuantity = "Insert into tblinventory(ItemID,AddedDate,AddedBy,ItemQuantity) values(1,NOW(),".$UserId.",".$Items.");";
		$addBatch = $this->db->query($QueryItemQuantity)->result();
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
}