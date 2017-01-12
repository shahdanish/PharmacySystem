<?php
class LabTests_db extends CI_Model {


	
	
	function LoadTestTypes()
	{
		$query="select * from tblTestTypes where IFNULL(isDeleted,0) = 0 ";
		return $this->db->query($query)->result();
		
	}
	function AddTestType($TestType,$TestId)
	{
		$query="";
		if($TestId==0)
			$query="Insert into tblTestTypes(TestType,IsDeleted) values ('".$TestType."',0)";
		else
			$query="Update tblTestTypes set TestType = '".$TestType."' Where Id = ".$TestId;
		return $this->db->query($query);
	}
	function AddTest($TestType,$TestName,$TestFee,$TestId)
	{
		$query="";
		if($TestId==0)
			$query="Insert into tblTests(TestName,TestType,TestFee,IsDeleted) values ('".$TestName."','".$TestType."','".$TestFee."',0)";
		else
			$query="Update tblTests set TestName = '".$TestName."' ,TestType = '".$TestType."',TestFee = '".$TestFee."' Where TestID = ".$TestId;
		return $this->db->query($query);
	}
	function LoadTests()
	{
		$query="Select * from tblTests t Where IFNULL(t.IsDeleted,0)=0";
		return $this->db->query($query)->result();
	}
	function DeleteLabTest($TestID)
	{
		$query="Update tblTests set IsDeleted = 1 Where TestID = ".$TestID;
		return $this->db->query($query);
	}
	function DeleteTestType($TestID)
	{
		$query="Update tblTestTypes set IsDeleted = 1 Where Id = ".$TestID;
		return $this->db->query($query);
	}
	function LoadPatientTests()
	{
		$query="SELECT DISTINCT PT.TestDate, P.PatientName, P.PatientCNIC,T.TestName FROM  `tblpatientTests` PT JOIN  `tblPatient` p ON PT.PatientID = p.PatientID JOIN   `tblTests` T ON PT.TestID = T.TestID";
		return $this->db->query($query)->result();
		
	}
	function LoadPatientXRays()
	{
		$query="SELECT DISTINCT PT.TestDate, P.PatientName, P.PatientCNIC,PT.TestName FROM  `tblpatientTests` PT JOIN  `tblPatient` p ON PT.PatientID = p.PatientID Where PT.TestId is null";
		return $this->db->query($query)->result();
		
	}
}